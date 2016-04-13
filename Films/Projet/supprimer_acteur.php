<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Inséré</title>
    <?php include("connexion.php"); ?>
    <?php include("Acteur.php"); ?>

</head>
<body>
<h3>
    Supprimer de la base de donnée
</h3>


<?php
$id = $_POST['Acteur'];
$supp_acteur = new Acteur($id, null, null);
$supp_acteur->supprimer();
?>

<a href="indexTEMP.php">
    <button type="button" class="btn btn-default">Retour liste</button>
</a>
</body>
</html>