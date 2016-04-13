<?php

spl_autoload_register(function($classname)
{
//    $file = __DIR__.'/'.$classname.'.php';
    $file = $classname.'.php';
    require_once($file);
});
