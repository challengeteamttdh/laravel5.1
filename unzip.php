<?php
$zip = new ZipArchive;
$res = $zip->open('laravel5.1.zip');
define('DIR_FOLDER', $_SERVER['DOCUMENT_ROOT']);
if ($res === TRUE) {
  $zip->extractTo(DIR_FOLDER);
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}