<?php

spl_autoload_register(function($classname)
{
//    $file = __DIR__.'/'.$classname.'.php';
    $file = $classname.'.php';
    require_once($file);
});

require_once("connexion.php");
$PDO = connectDb();
$repoFilm = new FilmRepository($PDO);
$repoActeur = new ActeurRepository($PDO);
require_once ("nav_bar.php");
