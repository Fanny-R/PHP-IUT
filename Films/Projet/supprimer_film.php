<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Inséré</title>
    <?php include("connexion.php"); ?>
    <?php include ("Film.php");?>

</head>
<body>
<h3>
Supprimer de la base de donnée
</h3>


<?php
$id = $_POST['Film'];
$supp_film = new Film($id,null, null,null);
$supp_film->supprimer();
?>

<a href="indexTEMP.php">
    <button type="button" class="btn btn-default">Retour liste</button>
</a>
</body>
</html>