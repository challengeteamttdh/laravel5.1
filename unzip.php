<?php
$zip = new ZipArchive;
<<<<<<< HEAD
define('DIR_FOLDER', $_SERVER['DOCUMENT_ROOT']);
$res = $zip->open('vendor.zip');
=======
$res = $zip->open('laravel5.1.zip');
define('DIR_FOLDER', $_SERVER['DOCUMENT_ROOT']);
>>>>>>> 030bff704593dd0a1f0d4af5841227d61a536e3e
if ($res === TRUE) {
  $zip->extractTo(DIR_FOLDER);
  $zip->close();
  echo 'woot!';
} else {
<<<<<<< HEAD
  echo 'doh! , cannot open file';
=======
  echo 'doh!';
>>>>>>> 030bff704593dd0a1f0d4af5841227d61a536e3e
}