<?php

namespace Myupload;

class UploadFile
{
    public $file;

    public function __construct($file = '')
    {
       $this->file = $file; 
    }

    public function show($args)
    {
        var_dump($args);
    }

    public function showFile()
    {
        var_dump($this->file);
    }
}
