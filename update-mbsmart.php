<?php
/**
 * The Unzipper extracts .zip or .rar archives and .gz files on webservers.
 * It's handy if you do not have shell access. E.g. if you want to upload a lot
 * of files (php framework or image collection) as an archive to save time.
 * As of version 1.0 it also supports creating archives.
 *
 * @author  Eng Acs
 * @license GNU GPL v3
 * @package attec.toolbox
 * @version 1.0
 */
define('VERSION', '3.0');

$timestart = microtime(TRUE);
$GLOBALS['status'] = array();

$unzipper = new Unzipper;
if (isset($_POST['dounzip'])) {
  // Check if an archive was selected for unzipping.
  $archive = isset($_POST['zipfile']) ? strip_tags($_POST['zipfile']) : '';
  $destination = isset($_POST['extpath']) ? strip_tags($_POST['extpath']) : '';
  $unzipper->prepareExtraction($archive, $destination);
}


$timeend = microtime(TRUE);
$time = round($timeend - $timestart, 4);

/**
 * Class Unzipper
 */
class Unzipper
{
    public $localdir = '.';
    public $zipfiles = array();

    public function __construct()
    {
        // Read directory and pick .zip, .rar and .gz files.
        if ($dh = opendir($this->localdir)) {
            while (($file = readdir($dh)) !== false) {
                if (pathinfo($file, PATHINFO_EXTENSION) === 'zip'
          || pathinfo($file, PATHINFO_EXTENSION) === 'gz'
          || pathinfo($file, PATHINFO_EXTENSION) === 'rar'
        ) {
                    $this->zipfiles[] = $file;
                }
            }
            closedir($dh);

            if (!empty($this->zipfiles)) {
                $GLOBALS['status'] = array('info' => '.zip files found, ready for updating');
            } else {
                $GLOBALS['status'] = array('info' => 'No .zip files found.');
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
    public function prepareExtraction($archive, $destination = '')
    {
        // Determine paths.
        if (empty($destination)) {
            $extpath = $this->localdir;
        } else {
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
    public static function extract($archive, $destination)
    {
        $ext = pathinfo($archive, PATHINFO_EXTENSION);
        switch ($ext) {
      case 'zip':
        self::extractZipArchive($archive, $destination);
        break;
      
    }
    }

    /**
     * Decompress/extract a zip archive using ZipArchive.
     *
     * @param $archive
     * @param $destination
     */
    public static function extractZipArchive($archive, $destination)
    {
        // Check if webserver supports unzipping.
        if (!class_exists('ZipArchive')) {
            $GLOBALS['status'] = array('error' => 'Error: Your PHP version does not support unzip functionality.');
            return;
        }

        $zip = new ZipArchive;

        // Check if archive is readable.
        if ($zip->open($archive) === true) {
            // Check if destination is writable
            if (is_writeable($destination . '/')) {
                $zip->extractTo($destination);
                $zip->close();
                $GLOBALS['status'] = array('success' => 'Updated successfully now check site for any errors ');
            } else {
                $GLOBALS['status'] = array('error' => 'Error: Files/Directory not writeable by webserver.');
            }
        } else {
            $GLOBALS['status'] = array('error' => 'Error: Cannot read .zip update archive.');
        }
    }
}

  
  
/**
 * Class Zipper
 *
 * Copied and slightly modified from http://at2.php.net/manual/en/class.ziparchive.php#110719
 * @author umbalaconmeogia
 */
class Zipper
{
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
    private static function folderToZip($folder, &$zipFile, $exclusiveLength)
    {
        $handle = opendir($folder);

        while (false !== $f = readdir($handle)) {
            // Check for local/parent path or zipping file itself and skip.
            if ($f != '.' && $f != '..' && $f != basename(__FILE__)) {
                $filePath = "$folder/$f";
                // Remove prefix from file path before add to zip.
                $localPath = substr($filePath, $exclusiveLength);

                if (is_file($filePath)) {
                    $zipFile->addFile($filePath, $localPath);
                } elseif (is_dir($filePath)) {
                    // Add sub-directory.
                    $zipFile->addEmptyDir($localPath);
                    self::folderToZip($filePath, $zipFile, $exclusiveLength);
                }
            }
        }
        closedir($handle);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>WEATHER34 MB-SMART UPDATE</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style>   

:root {
    --white: #ffffff;
    --light: #f5f5f5;
    --dark: #131417;
    --dark-light: hsla(0, 0%, 0%, 0.251);
    --dark-toggle: #35393b;
    --dark-caption: rgba(66, 70, 72, 0.429);
    --black: #000000;
    --deepblue: #00adbd;
    --blue: #00adbd;
    --rainblue: #00adbd;
    --darkred: #703232;
    --deepred: #703232;
    --red: #d35f50;
    --yellow: #e6a241;
    --green: #90b22a;
    --orange: #ec5732;
    --purple: #8680bc;
    --silver: #ecf0f3;
    --border-dark: #3d464d;
    --body-text-dark: #afb7c0;
    --body-text-light: #545454;
    --blocks: #e6e8ef;
    --modules: #1e1f26;
    --blocks-background: hsla(198, 14%, 14%, 0.19)
}
    body {
      font-family: Arial, sans-serif;
      line-height:1;
	 color: #aeb6bf;
  width:80%;
	  margin:0 auto;
	}
	h1{font-size:18px}
	

    label {
      display: block;
      margin-top: 20px;
    }

    fieldset {
      border: 0;
	  color: #aeb6bf;
  background: #131417;
	height: 160px;
	margin:0 auto;
	margin-top:10px;
	margin-bottom:10px;
	border-radius:3px;
	-webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
	width:80%;
	border: 1px thin hsla(217, 15%, 17%, .5);
	border-bottom: 10px solid hsla(217, 15%, 17%, .5);
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
	box-shadow: inset -2px -2px 4px rgba(116, 116, 131, .1), inset 2px 2px 4px rgba(0, 0, 0, .9);
	background: linear-gradient(135deg, #212428, #2f363f);
    background: #1e2124;
    border: 1px solid var(--border-dark);
    border-bottom: 30px solid var(--border-dark)
    
    }

    .select {
      padding: 5px;
	  font-size: 110%;
	  max-width:300px;	  
	  background: linear-gradient(135deg, #212428, #2f363f);
  -webkit-appearance: button;
    -moz-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -webkit-padding-end: 20px;
    -moz-padding-end: 20px;
    -webkit-padding-start: 2px;
	-moz-padding-start: 2px;
	background-position: center right;
    background-repeat: no-repeat;
    border: 1px solid #555;
	border-radius:3px;
	-webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    color: #fff;
    font-size: inherit;
    margin: 10px;    
    padding-top: 2px;
    padding-bottom: 2px;
    text-overflow: ellipsis;
	white-space: nowrap;
	

    }

    .status {
	width:80%;
	  margin:0 auto;
      margin-bottom: 20px;
      padding: 10px;
      font-size: 80%;
      background: var(--dark);	 
	  color: #fff;
	  border: 1px thin hsla(217, 15%, 17%, 1);
    border-bottom: 10px solid hsla(217, 15%, 17%, 1)
    }

    .status--ERROR {
      background-color: var(--red);
      color: white;
	  font-size: 120%;
	  width:80%;
	  margin:0 auto;
    }

    .status--SUCCESS {
      background-color:var(--green);
      font-weight: bold;
      color: white;
	  font-size: 120%;
	  width:80%;
	  margin:0 auto;
    }

    .small {
      font-size: 0.7rem;
      font-weight: normal;
    }

    .version {
      font-size: 80%;
    }

    .form-field {
      border: 1px solid #AAA;
      padding: 8px;
      width: 280px;
    }

    .info {
      margin-top: 0;
      font-size: 80%;
      color: #222;
    }

    .submit {
      background-color:var(--orange);
      border: 0;
      color: #ffffff;
      font-size: 15px;
      padding: 10px 24px;
      margin: 20px 0 20px 0;
	  text-decoration: none;
	  border-radius: 2px;
    }

    .submit:hover {
      background-color:var(--blue);
      cursor: pointer;
    }   
  </style>
</head>
<body>

<form action="" method="POST">
  <fieldset>
    <h1>WEATHER34 MB-SMART UPDATER</h1>
    <label for="zipfile">Select file you want to use for update:</label>
    <select name="zipfile" size="1" class="select">
      <?php foreach ($unzipper->zipfiles as $zip) {
        echo "<option>$zip</option>";
      }
      ?>
    </select>
    
    <input type="submit" name="dounzip" class="submit" value="UPDATE NOW"/>
  </fieldset>

 
</form>
<p class="status status--<?php echo strtoupper(key($GLOBALS['status'])); ?>">
  Status: <?php echo reset($GLOBALS['status']); ?><br/>
  <span class="small">Processing Time: <?php echo $time; ?> seconds</span><br>
  
  <span class="small">MB-SMART Updater Version 3.0</span>
</p>

</body>
</html>