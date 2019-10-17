<?php
 	####################################################################################################
	#	CREATED FOR HOMEWEATHERSTATION MB SMART TEMPLATE 											   #
	# https://weather34.com/homeweatherstation/index.html 											   # 
	# 	                                                                                               #
	# 	Release: OCTOBER 2019						  	                                               #
	# 	                                                                                               #
	#   https://www.weather34.com 	                                                                   #
	####################################################################################################
 // FIRST PUBLIC RELEASE FOR MB SMART //
 // SIMPLE PHP BASED AND CSS STYLED //
 // ADAPTED & DEVELOPED BY BRIAN UNDERDOWN //
 // Original developed by Andreas Tasch found at https://github.com/ndeet/
 // SMART UPDATER & BACK FOR Meteobridge SMART//
 
define('VERSION', '1.05');

$timestart = microtime(TRUE);
$GLOBALS['status'] = array();

$unzipper = new Unzipper;
if (isset($_POST['dounzip'])) {
  // Check if an archive was selected for unzipping.
  $archive = isset($_POST['zipfile']) ? strip_tags($_POST['zipfile']) : '';
  $destination = isset($_POST['extpath']) ? strip_tags($_POST['extpath']) : '';
  $unzipper->prepareExtraction($archive, $destination);
}

if (isset($_POST['dozip'])) {
  $zippath = !empty($_POST['zippath']) ? strip_tags($_POST['zippath']) : '.';
  // Resulting zipfile e.g. MB-SMART-BACKUP-2016-07-23.zip.
  $zipfile = 'MB-SMART-BACKUP-' . date("Ymdhi") . '.zip';
  Zipper::zipDir($zippath, $zipfile);
}

$timeend = microtime(TRUE);
$time = round($timeend - $timestart, 4);

/**
 * Class Unzipper
 */
class Unzipper {
  public $localdir = '.';
  public $zipfiles = array();

  public function __construct() {
    // Read directory and pick .zip, .rar and .gz files.
    if ($dh = opendir($this->localdir)) {
      while (($file = readdir($dh)) !== FALSE) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'zip'
          || pathinfo($file, PATHINFO_EXTENSION) === 'gz'
          || pathinfo($file, PATHINFO_EXTENSION) === 'rar'
        ) {
          $this->zipfiles[] = $file;
        }
      }
      closedir($dh);

      if (!empty($this->zipfiles)) {
        $GLOBALS['status'] = array('info' => '.zip or .gz or .rar files found, ready for extraction');
      }
      else {
        $GLOBALS['status'] = array('info' => 'No .zip or .gz or rar files found. So only zipping functionality available.');
      }
    }
  }

  /**
   * Prepare and check zipfile for extraction.
   *
   * @param string $archive
   *   The archive name including file extension. E.g. my_archive.zip.
   * @param string $destination
   *   The relative destination path where to extract files.
   */
  public function prepareExtraction($archive, $destination = '') {
    // Determine paths.
    if (empty($destination)) {
      $extpath = $this->localdir;
    }
    else {
      $extpath = $this->localdir . '/' . $destination;
      // Todo: move this to extraction function.
      if (!is_dir($extpath)) {
        mkdir($extpath);
      }
    }
    // Only local existing archives are allowed to be extracted.
    if (in_array($archive, $this->zipfiles)) {
      self::extract($archive, $extpath);
    }
  }

  /**
   * Checks file extension and calls suitable extractor functions.
   *
   * @param string $archive
   *   The archive name including file extension. E.g. my_archive.zip.
   * @param string $destination
   *   The relative destination path where to extract files.
   */
  public static function extract($archive, $destination) {
    $ext = pathinfo($archive, PATHINFO_EXTENSION);
    switch ($ext) {
      case 'zip':
        self::extractZipArchive($archive, $destination);
        break;
      case 'gz':
        self::extractGzipFile($archive, $destination);
        break;
      case 'rar':
        self::extractRarArchive($archive, $destination);
        break;
    }

  }

  /**
   * Decompress/extract a zip archive using ZipArchive.
   *
   * @param $archive
   * @param $destination
   */
  public static function extractZipArchive($archive, $destination) {
    // Check if webserver supports unzipping.
    if (!class_exists('ZipArchive')) {
      $GLOBALS['status'] = array('error' => 'Error: Your PHP version does not support unzip functionality.');
      return;
    }

    $zip = new ZipArchive;

    // Check if archive is readable.
    if ($zip->open($archive) === TRUE) {
      // Check if destination is writable
      if (is_writeable($destination . '/')) {
        $zip->extractTo($destination);
        $zip->close();
        $GLOBALS['status'] = array('success' => 'MB-SMART update file successfully');
      }
      else {
        $GLOBALS['status'] = array('error' => 'Error: Directory not writeable by webserver.');
      }
    }
    else {
      $GLOBALS['status'] = array('error' => 'Error: Cannot read .zip archive.');
    }
  }

  /**
   * Decompress a .gz File.
   *
   * @param string $archive
   *   The archive name including file extension. E.g. my_archive.zip.
   * @param string $destination
   *   The relative destination path where to extract files.
   */
  public static function extractGzipFile($archive, $destination) {
    // Check if zlib is enabled
    if (!function_exists('gzopen')) {
      $GLOBALS['status'] = array('error' => 'Error: Your PHP has no zlib support enabled.');
      return;
    }

    $filename = pathinfo($archive, PATHINFO_FILENAME);
    $gzipped = gzopen($archive, "rb");
    $file = fopen($destination . '/' . $filename, "w");

    while ($string = gzread($gzipped, 4096)) {
      fwrite($file, $string, strlen($string));
    }
    gzclose($gzipped);
    fclose($file);

    // Check if file was extracted.
    if (file_exists($destination . '/' . $filename)) {
      $GLOBALS['status'] = array('success' => 'MB-SMART update file successfully.');

      // If we had a tar.gz file, let's extract that tar file.
      if (pathinfo($destination . '/' . $filename, PATHINFO_EXTENSION) == 'tar') {
        $phar = new PharData($destination . '/' . $filename);
        if ($phar->extractTo($destination)) {
          $GLOBALS['status'] = array('success' => 'Extracted tar.gz archive successfully.');
          // Delete .tar.
          unlink($destination . '/' . $filename);
        }
      }
    }
    else {
      $GLOBALS['status'] = array('error' => 'Error unzipping file.');
    }

  }

  /**
   * Decompress/extract a Rar archive using RarArchive.
   *
   * @param string $archive
   *   The archive name including file extension. E.g. my_archive.zip.
   * @param string $destination
   *   The relative destination path where to extract files.
   */
  public static function extractRarArchive($archive, $destination) {
    // Check if webserver supports unzipping.
    if (!class_exists('RarArchive')) {
      $GLOBALS['status'] = array('error' => 'Error: Your PHP version does not support .rar archive functionality. <a class="info" href="http://php.net/manual/en/rar.installation.php" target="_blank">How to install RarArchive</a>');
      return;
    }
    // Check if archive is readable.
    if ($rar = RarArchive::open($archive)) {
      // Check if destination is writable
      if (is_writeable($destination . '/')) {
        $entries = $rar->getEntries();
        foreach ($entries as $entry) {
          $entry->extract($destination);
        }
        $rar->close();
        $GLOBALS['status'] = array('success' => 'MB-SMART update file updated successfully.');
      }
      else {
        $GLOBALS['status'] = array('error' => 'Error: Directory not writeable by webserver.');
      }
    }
    else {
      $GLOBALS['status'] = array('error' => 'Error: Cannot read .rar archive.');
    }
  }

}

/**
 * Class Zipper
 *
 * Copied and slightly modified from http://at2.php.net/manual/en/class.ziparchive.php#110719
 * @author umbalaconmeogia
 */
class Zipper {
  /**
   * Add files and sub-directories in a folder to zip file.
   *
   * @param string $folder
   *   Path to folder that should be zipped.
   *
   * @param ZipArchive $zipFile
   *   Zipfile where files end up.
   *
   * @param int $exclusiveLength
   *   Number of text to be exclusived from the file path.
   */
  private static function folderToZip($folder, &$zipFile, $exclusiveLength) {
    $handle = opendir($folder);

    while (FALSE !== $f = readdir($handle)) {
      // Check for local/parent path or zipping file itself and skip.
      if ($f != '.' && $f != '..' && $f != basename(__FILE__)) {
        $filePath = "$folder/$f";
        // Remove prefix from file path before add to zip.
        $localPath = substr($filePath, $exclusiveLength);

        if (is_file($filePath)) {
          $zipFile->addFile($filePath, $localPath);
        }
        elseif (is_dir($filePath)) {
          // Add sub-directory.
          $zipFile->addEmptyDir($localPath);
          self::folderToZip($filePath, $zipFile, $exclusiveLength);
        }
      }
    }
    closedir($handle);
  }

  /**
   * Zip a folder (including itself).
   *
   * Usage:
   *   Zipper::zipDir('path/to/sourceDir', 'path/to/out.zip');
   *
   * @param string $sourcePath
   *   Relative path of directory to be zipped.
   *
   * @param string $outZipPath
   *   Relative path of the resulting output zip file.
   */
  public static function zipDir($sourcePath, $outZipPath) {
    $pathInfo = pathinfo($sourcePath);
    $parentPath = $pathInfo['dirname'];
    $dirName = $pathInfo['basename'];

    $z = new ZipArchive();
    $z->open($outZipPath, ZipArchive::CREATE);
    $z->addEmptyDir($dirName);
    if ($sourcePath == $dirName) {
      self::folderToZip($sourcePath, $z, 0);
    }
    else {
      self::folderToZip($sourcePath, $z, strlen("$parentPath/"));
    }
    $z->close();

    $GLOBALS['status'] = array('success' => 'Successfully created archive ' . $outZipPath);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>MB-SMART UPDATER/BACKUP/RESTORE</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    <!--
    body {
      font-family: Arial,Helvetica,sans-serif;
      line-height: 150%;
	  width:60%;
	  min-width:500px;	  
	  margin:0 auto;
	  background-color:0;
	  color:#f3f4f7;
	   -webkit-appearance: none;
	   font-size:14px;
    }
	
	a{text-transform:none;text-decoration:none;color:#262830}
	h1{font-size:1.2em;font-weight:500}
    label {
      display: block;
      margin-top: 10px;
	  -webkit-appearance: none;
    }
    fieldset {
      border: 0;
      background-color: #262830;
      margin: 10px 0 10px 0;
	    -webkit-appearance: none;
		-webkit-border-radius:3px;
		border-radius:3px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25), 0 2px 2px rgba(0, 0, 0, 0.20), 0 4px 4px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25), 0 2px 2px rgba(0, 0, 0, 0.20), 0 4px 4px rgba(0, 0, 0, 0.15);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
    }
    	
    .status {
      margin: 0;
	  margin-top:10px;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 1em;
      background: #b83603;
      border:0;
	  -webkit-border-radius:3px;
		border-radius:3px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25), 0 2px 2px rgba(0, 0, 0, 0.20), 0 4px 4px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25), 0 2px 2px rgba(0, 0, 0, 0.20), 0 4px 4px rgba(0, 0, 0, 0.15);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
    }
    .status--ERROR {
      background-color:#b8362d;
      color: white;
      font-size: 120%;
    }
    .status--SUCCESS {
      background-color: #01a4b5;
      font-weight: bold;
      color: white;
      font-size: 120%
    }
    .small {
      font-size: 0.7rem;
      font-weight: normal;
    }    
    .form-field {
      border:0;
      padding: 8px;
      width: 280px;
	   -webkit-appearance: none;
	  -webkit-border-radius:3px;
		border-radius:3px;
		display:none;
	  
    }
    .info {
      margin-top: 0;
      font-size: 90%;
      color: silver;
    }
    .submit {
      background-color:#01a4b5;
      border: 0;
      color: #ffffff;
      font-size: 15px;
      padding: 10px 24px;
      margin: 20px 0 20px 0;
      text-decoration: none;
	   -webkit-appearance: none;
	   -webkit-border-radius:3px;
		border-radius:3px;
    }
    .submit:hover {
      background-color: #b83603;
      cursor: pointer;
	   -webkit-appearance: none;
    }
	.version{color:#555;font-size:70%;}
	orange{color:#01a4b5}
	blue{color:#01a4b5}
	blue1{color:#fff;width:30px;background:#b83603;padding:3px;-webkit-border-radius:2px;border-radius:2px;}
	
   .weather34-box {
 display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: absolute;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-top:15px;
}
.weather34-box select {
  background-color: #b83603;
  color: white;
  padding: 12px;
  width:450px;
  border: none;
  font-size: 14px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance:none;
  appearance:none;
  outline: none;
  
}

.weather34-box::before {
  content: "Select";
  font-family: Arial, Helvetica, sans-serif;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;  
  text-align: center;
  font-size: 14px;
  line-height: 45px;
  color:white;
  background-color:#01a4b5;
  pointer-events: none;
  font-weight:400;
  outline: none;
  -webkit-border-radius:2px;border-radius:2px;
}

.weather34-box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color:0;
}

.weather34-box select option {
  position:relative;
  padding: 30px;
  background-color:#b83603;
  -webkit-border-radius:2px;border-radius:2px;
  margin-top:40px;
  height:100px;
  line-height: 45px;
  color:#fff;
  text-shadow: 1px 1px 3px rgba(61, 70, 77, 0.2);
  border:1px solid #01a4b5;
   -webkit-appearance:none;
  appearance:none;
  outline: none;
  
   
}
  </style>
</head>
<body>
<p class="status status--<?php echo strtoupper(key($GLOBALS['status'])); ?>">
  Status: <?php echo reset($GLOBALS['status']); ?><br/>
  <span class="small">Processing Time: <?php echo $time; ?> seconds</span>
</p>



<form action="" method="POST">
  <fieldset>
    <h1>MB SMART UPDATER/RESTORE</h1>
    <label for="zipfile">Select MB-SMART-UPDATE.zip or Backup  file you want to update or restore:</label>
    <div class="weather34-box">
    <select name="zipfile" size="1" class="select">
      <?php foreach ($unzipper->zipfiles as $zip) {
        echo "<option>$zip</option>";
      }
      ?>
    </select></div>
    <label for="extpath"></label>
    <input type="text" name="extpath" class="form-field" />
    <p class="info"></p><br><br>
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg> 
    <input type="submit" name="dounzip" class="submit" value="UPDATE MB-SMART"/>
  </fieldset>

  <fieldset>
    <h1>MB-SMART BACUP</h1>
    <label for="zippath"></label>
    <input type="text" name="zippath" class="form-field" />
    <p class="info">The current MB-SMART install directory will be used.</p>
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg> 
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg> 
    <input type="submit" name="dozip" class="submit" value="BACKUP MB-SMART"/>
    <br>
    *Important do not refresh the browser after updating or backing up it will repeat again.<br>
     Always access this page from the setup screen <a href="mb-smart-setup.php" target="_self" alt="setup screen" title="setup screen">
     <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg>     
     <blue1>Here</blue1></a></p>
    
  </fieldset>
  
  
  
  
</form>
<p class="version"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">Weather<orange>34</orange></a> MB-SMART Updater/Backup Version: <blue><?php echo VERSION; ?></blue> *Based on Original code by <a href="https://github.com/ndeet/" title="https://github.com/ndeet/" target="_blank"><blue>Andreas Tasch</blue></a> </p>
</body>
</html>