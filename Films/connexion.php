<?php


/**
 * @return PDO
 * Fonction de connexion à la BDD
 */
function connectDb()
{
    $host = "iutdoua-webetu.univ-lyon1.fr";
    $user = "p1505707";
    $password = "242869";
    $dbname = "p1505707";
    try {
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
        return $pdo;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

?>