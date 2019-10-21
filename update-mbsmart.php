 <style type="text/css">
    body{font-family:Arial,Helvetica,sans-serif;line-height:150%;width:60%;min-width:500px;margin:0 auto;background-color:white;color:#f3f4f7;-webkit-appearance:none;font-size:14px}
	a{text-transform:none;text-decoration:none;color:#262830}
	h1{font-size:1.2em;font-weight:500}
	label{display:block;margin-top:10px;-webkit-appearance:none}
	fieldset{border:0;background-color:#262830;margin:10px 0 10px 0;-webkit-appearance:none;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
	.status{margin:0;margin-top:10px;margin-bottom:10px;padding:10px;font-size:1em;background:#b83603;border:0;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
	.status--ERROR{background-color:#b8362d;color:#fff;font-size:120%}
	.status--SUCCESS{background-color:#01a4b5;font-weight:700;color:#fff;font-size:120%}.small{font-size:.7rem;font-weight:400}
	.form-field{border:0;padding:8px;width:280px;-webkit-appearance:none;-webkit-border-radius:3px;border-radius:3px;display:none}.info{margin-top:0;font-size:90%;color:silver}.submit{background-color:#01a4b5;border:0;color:#fff;font-size:15px;padding:10px 24px;margin:20px 0 20px 0;text-decoration:none;-webkit-appearance:none;-webkit-border-radius:3px;border-radius:3px}.submit:hover{background-color:#b83603;cursor:pointer;-webkit-appearance:none}.version{color:#555;font-size:70%}orange{color:#01a4b5}blue{color:#01a4b5}blue1{color:#fff;width:30px;background:#b83603;padding:3px;-webkit-border-radius:2px;border-radius:2px}.weather34-box{display:-webkit-box;display:-ms-flexbox;display:flex;position:absolute;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-top:15px}.weather34-box select{background-color:#b83603;color:#fff;padding:12px;width:450px;border:none;font-size:14px;box-shadow:0 5px 25px rgba(0,0,0,.2);-webkit-appearance:none;appearance:none;outline:0}.weather34-box::before{content:"Select";font-family:Arial,Helvetica,sans-serif;position:absolute;top:0;right:0;width:20%;text-align:center;font-size:14px;line-height:45px;color:#fff;background-color:#01a4b5;pointer-events:none;font-weight:400;outline:0;-webkit-border-radius:2px;border-radius:2px}.weather34-box:hover::before{color:rgba(255,255,255,.6);background-color:0}.weather34-box select option{position:relative;padding:30px;background-color:#b83603;-webkit-border-radius:2px;border-radius:2px;margin-top:40px;height:100px;line-height:45px;color:#fff;text-shadow:1px 1px 3px rgba(61,70,77,.2);border:1px solid #01a4b5;-webkit-appearance:none;appearance:none;outline:0}.login-screen{background-color:#262830;padding:20px;border-radius:5px;margin:0 auto}.app-title{text-align:center;color:#ccc;background-color:none}.login-form{text-align:center;background-color:#262830}.control-group{margin-bottom:10px}input{text-align:center;background-color:#777;border:0;border-radius:3px;font-size:16px;font-weight:200;padding:10px 0;width:250px;transition:border .5s;color:#fff;border:2px solid rgba(86,95,103,1);box-shadow:none;margin:0 auto;margin-top:10px}input:focus{border:0;box-shadow:none}.btn{border:2px solid transparent;background:rgba(86,95,103,1);color:#fff;font-size:16px;line-height:25px;padding:10px 0;text-decoration:none;text-shadow:none;border-radius:3px;box-shadow:none;transition:.25s;display:block;width:150px;margin:10px;text-align:center;-webkit-appearance:none}.btn:hover{background-color:rgba(86,95,103,1)}.login-link{font-size:12px;color:#444;display:block;margin-top:12px}.loginformarea{margin:0 auto;text-align:center;background:#262830}white{color:#fff}.input-button,.modal-button{font-size:18px;padding:10px 40px}.input-block input,.input-button,.modal-button{font-family:Arial,sans-serif;border:0}.icon-button,.input-block input,.input-button,.modal-button{outline:0;cursor:pointer}.modal-button{color:#fff;border-radius:5px;background:#01a4b5;width:220px;text-align:center}.modal-button:hover{border-color:rgba(255,255,255,.2);background:rgba(144,177,42,1);color:#f8f8f8}.input-button{color:#7d695e;border-radius:5px;background:#fff}.input-button:hover{background:rgba(144,177,42,1);color:#fff}
  </style>
<div class="loginformarea">
<?php include('settings1.php');
	//lets secure the homeweatherstation easy setup ///
function showForm($error="LOGIN"){ 
?> <?php echo $error; ?> 
  
  <div class= "login_screen" style="width:60%;max-width:600px;margin:0 auto;color:rgba(24, 25, 27, 1.000);border:solid 1px grey;padding:10px;border-radius:4px;color:silver;background:#262830;-webkit-appearance:none;-webkit-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);box-shadow:0 1px 1px rgba(0,0,0,.25),0 2px 2px rgba(0,0,0,.2),0 4px 4px rgba(0,0,0,.15);">  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd" > 
   Enter Your Password to enter MB-SMART Update/Backup screen below
<center> <div class="modal-buttons">
     <input name="passwd" type="password" class="input-button"/>  <input type="submit" name="submit_pwd" value="Submit Password" class="modal-button" /> 
         </form> 
     </center>
      <?php echo "2015-" ;?><?php echo date('Y');?> &copy;</a> WEATHER34 MB-<orange>SMART</orange></span></span></span>
      <br><br>
<?php    
} 
?>
</div>
  <div span style="width:auto;margin:0 auto;text-align:center;color:#555;background:0;font-family:arial;padding:20px;border-radius:4px;"> 
<?php 
$Password = $password; 
if (isset($_POST['submit_pwd'])){    $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';  
   if ($pass != $Password) { 
      showForm("WEATHER34 MB-SMART Updater/Backup "); 
      exit();      
   } 
} else { 
   showForm("WEATHER34 MB-SMART Updater/Backup"); 
   exit(); 
} 
?>

</div>



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
define('VERSION', '1.05 ');
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
  // Resulting zipfile e.g. zipper--2016-07-23--11-55.zip.
  $zipfile = 'MB-SMART-BACKUP-' . date("YmdHi") . '.zip';
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
        $GLOBALS['status'] = array('info' => 'MB-SMART-Update.zip or MB-SMART-Backup.zip files found, ready for updating or restore if required');
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
        $GLOBALS['status'] = array('success' => 'MB-SMART Updater updated successfully');
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
      $GLOBALS['status'] = array('success' => 'MB-SMART updated successfully.');
      // If we had a tar.gz file, let's extract that tar file.
      if (pathinfo($destination . '/' . $filename, PATHINFO_EXTENSION) == 'tar') {
        $phar = new PharData($destination . '/' . $filename);
        if ($phar->extractTo($destination)) {
          $GLOBALS['status'] = array('success' => 'MB-SMART updated successfully.');
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
        $GLOBALS['status'] = array('success' => 'MB-SMART Updater updated successfully.');
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
    $GLOBALS['status'] = array('success' => 'Successfully created MB-SMART Backup ' . $outZipPath);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>MB-SMART UPDATER/BACKUP/RESTORE</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form action="" method="POST">
  <fieldset>
    <h1>Weather<blue>34</blue> MB-SMART Updater</h1>
    <label for="zipfile">Select <blue>MB-SMART-UPDATE-XXXXX.zip</blue> for update:</label>
    
    <div class="weather34-box">
    <select name="zipfile" size="1" class="select">
      <?php foreach ($unzipper->zipfiles as $zip) {
        echo "<option>$zip</option>";
      }
      ?>
    </select>
    </div>
   <br><br><br>
   <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg><svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg>
    <input type="submit" name="dounzip" class="submit" value="UPDATE MB-SMART"/>
  </fieldset>
  
  <fieldset >  
   <h1>Weather<blue>34</blue> MB-SMART BACKUP</h1>
    <label for="zipfile">Backup will be created in current template directory:</label>
    <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg><svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg>
    <input type="submit" name="dozip" class="submit" value="BACK UP MB-SMART"/>
    <br>
    *Important do not refresh the browser after updating or backing up it will repeat again.<br>
     Always access this page from the setup screen <a href="mb-smart-setup.php" target="_self" alt="setup screen" title="setup screen">
     <svg id="i-chevron-right" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><path d="M12 30 L24 16 12 2" /></svg>     
     <blue1>Here</blue1></a></p>
    </fieldset>
    
      
</form>
<p class="status status--<?php echo strtoupper(key($GLOBALS['status'])); ?>">
  Status: <?php echo reset($GLOBALS['status']); ?><br/>
  <span class="small">Processing Time: <?php echo $time; ?> seconds</span>
</p>

<p class="version"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank">Weather<orange>34</orange></a> MB-SMART Updater/Backup Version: <blue><?php echo VERSION; ?></blue> *Based on Original code by <a href="https://github.com/ndeet/" title="https://github.com/ndeet/" target="_blank"><blue>Andreas Tasch</blue></a> </p>
</body>
</html>