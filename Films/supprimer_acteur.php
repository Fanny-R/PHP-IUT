<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Inséré</title>

</head>
<body>
<?php require_once('autoload.php'); ?>

<!--Supprime un acteur de la base de donnée et renvoie l'information correspondate à l'user-->
<?php
$id = $_POST['Acteur'];
$nom = $repoActeur->getActeur($id)->getPrenomActeur() . ' ' . $repoActeur->getActeur($id)->getNomActeur();
$supp_acteur = new Acteur($id, null, null);
$valide = $repoActeur->deleteActeur($supp_acteur);


if ($valide) {
    echo '<h1>De toute manière, je l\'aimais pas.</h1>
                      <div class="alert alert-success">
                      <strong>Parfait !</strong> L\'acteur ' . $nom . ' a été supprimé de la base de donnée.
                      </div>';
} else {
    echo '<h1>Jamais entendu parler.</h1>
                      <div class="alert alert-warning">
                      <strong>Attention !</strong> L\'acteur ' . $nom . ' ne fait pas parti de la base de donnée ou a déjà été supprimé.
                      </div>';
}
?>

</body>
</html>

