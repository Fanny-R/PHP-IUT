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
$monActeur = new Acteur(NULL, $nom_acteur, $prenom_acteur);
$monActeur->ajout();
?>


</body>
</html>
