<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>
 

</head>
<body>
<?php require_once('autoload.php'); ?>


<?php
$nom_acteur = $_POST['nom_acteur'];
$prenom_acteur = $_POST['prenom_acteur'];

if (!empty($nom_acteur) && (!empty($prenom_acteur))){
    $monActeur = new Acteur(NULL, $nom_acteur, $prenom_acteur);
    $monActeur->ajout();
}else {
    echo '<h1>Mauvaise valeurs</h1>
                      <div class="alert alert-danger">
                      <strong>Attention !</strong> Les valeurs ne sont pas correctes.
                      </div>';
}
?>


</body>
</html>
