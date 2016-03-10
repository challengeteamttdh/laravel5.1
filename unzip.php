<?php
$zip = new ZipArchive;
define('DIR_FOLDER', $_SERVER['DOCUMENT_ROOT']);
$res = $zip->open('vendor.zip');
if ($res === TRUE) {
  $zip->extractTo(DIR_FOLDER);
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh! , cannot open file';
}