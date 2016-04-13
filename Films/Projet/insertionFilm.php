<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>
    <?php include("Film.php"); ?>
    <?php include("connexion.php"); ?>

</head>
<body>
<h1>La base de donnée à été mise à jour</h1>
<?php
$nom = $_POST['nom_film'];
$annee = $_POST['annee_prod'];
$score = $_POST['score'];
$monFilm = new Film(NULL, $nom, $annee, $score);
$monFilm->ajout();
?>

<a href="indexTEMP.php">
    <button type="button" class="btn btn-default">Retour liste</button>
</a>
</body>
</html>
