<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
    <?php include("Role.php"); ?>

</head>
<body>
Insertion
<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole = new Role($id_film, $id_acteur);

// Est ce qu'il serait pas possible d'envoyer deux objet, un objet Film et
// un autre Role pour par la suite, indiquer le nom du film et pas juste son ID à l'user.

$monRole->liaison();
?>


</body>
</html>
