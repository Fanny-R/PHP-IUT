<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>
    <?php include("Role.php"); ?>

</head>
<body>
<h1>La base de donnée à été mise à jour</h1>
<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole = new Role($id_film, $id_acteur);

// Est ce qu'il serait pas possible d'envoyer deux objet, un objet Film et
// un autre Role pour par la suite, indiquer le nom du film et pas juste son ID à l'user.

$monRole->liaison();
?>

<a href="indexTEMP.php">
    <button type="button" class="btn btn-default">Retour liste</button>
</a>
</body>
</html>
