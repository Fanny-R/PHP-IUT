<?php

spl_autoload_register(function ($classname) {
//    $file = __DIR__.'/'.$classname.'.php';
    $file = $classname . '.php';
    require_once($file);
});

/**
 * Permet de récupérer à tout moment la connexion avec la BDD
 */
require_once("connexion.php");
$PDO = connectDb();

/**
 * Permet de se connecter au répertoire et de les gérer plus facilement
 */
$repoFilm = new FilmRepository($PDO);
$repoActeur = new ActeurRepository($PDO);
$repoCasting = new CastingRepository($PDO);

/**
 * Ajout de la bare de navigation
 */
require_once("nav_bar.php");
