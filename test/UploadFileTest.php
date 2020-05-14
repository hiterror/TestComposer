<?php

require_once '../vendor/autoload.php';

use Myupload\UploadFile;

$uf = new UploadFile();
$uf->show(['a', 'b', 'c']);
