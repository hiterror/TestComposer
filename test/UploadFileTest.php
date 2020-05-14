<?php

require_once '../vendor/autoload.php';

use Myupload\UploadFile;

$uf = new UploadFile();
$uf->show(['a', 'b', 'c']);


$uf2 = new UploadFile('/tmp/file.txt');
$uf2->showFile();
