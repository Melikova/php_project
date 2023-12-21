<?php

spl_autoload_register(function($className){
    $path=$_SERVER['DOCUMENT_ROOT']."/app/controllers/";
    // $path=dirname( __DIR__ ).'/app/controllers/';
    $extension='.php';
    $className=ucfirst($className);
    $fullPath=$path.$className.$extension;
    if(!file_exists($fullPath)){
        return false;
    }
    require_once ($fullPath);
});

spl_autoload_register(function($className){
    $path=$_SERVER['DOCUMENT_ROOT']."/app/configs/";
    // $path=dirname( __DIR__ ).'/app/configs/';
    $extension='.php';
    $className=ucfirst($className);
    $fullPath=$path.$className.$extension;
    if(!file_exists($fullPath)){
        return false;
    }
    require_once ($fullPath);
});
