<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>
    
</head>
<body>
<?php require_once('autoload.php'); ?>

<!--Ajout d'un Acteur en base de donnée, retour sur l'ajout ou non pour l'utilisateur-->
<?php
$nom_acteur = $_POST['nom_acteur'];
$prenom_acteur = $_POST['prenom_acteur'];

if (!empty($nom_acteur) && (!empty($prenom_acteur))) {
    $monActeur = new Acteur(NULL, $nom_acteur, $prenom_acteur);
    $valide = $repoActeur->setActeur($monActeur);;

    if (!$valide) {
        echo '<h1>On copie pas !</h1>
                      <div class="alert alert-warning">
                      <strong>Attention !</strong> L\'acteur ' . $prenom_acteur . ' ' . $nom_acteur . ' existe déjà 
                      </div>';
    } else {
        echo '<h1>Bienvenue, tu verras, on est bien.</h1>
                      <div class="alert alert-success">
                      <strong>Bravo !</strong> L\'acteur ' . $prenom_acteur . ' ' . $nom_acteur . ' a été inséré.
                      </div>';
    }


} else {
    echo '<h1>Mauvaise valeurs</h1>
                      <div class="alert alert-danger">
                      <strong>Attention !</strong> Les valeurs ne sont pas correctes.
                      </div>';
}
?>


</body>
</html>
