<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>

</head>
<body>
<?php include_once ('Role.php');?>
<!--Autoloader ne trouve pas la classe Role pour la création de new Role(..);-->

<?php require_once('autoload.php');?>

<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole= new Role($id_film,$id_acteur);
// Est ce qu'il serait pas possible d'envoyer deux objet, un objet Film et
// un autre Role pour par la suite, indiquer le nom du film et pas juste son ID à l'user.

$monRole->liaison();
?>

</body>
</html>
