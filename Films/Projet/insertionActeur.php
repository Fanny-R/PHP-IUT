﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>
    <?php include("Acteur.php"); ?>
    <?php include("connexion.php"); ?>

</head>
<body>
<h1>La base de donnée à été mise à jour</h1>

<?php
$nom_acteur = $_POST['nom_acteur'];
$prenom_acteur = $_POST['prenom_acteur'];
$monActeur = new Acteur(NULL, $nom_acteur, $prenom_acteur);
$monActeur->ajout();
?>

<a href="indexTEMP.php">
    <button type="button" class="btn btn-default">Retour liste</button>
</a>
</body>
</html>
