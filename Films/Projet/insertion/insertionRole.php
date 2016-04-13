<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
    <?php include("../class/Role.php"); ?>

</head>
<body>

<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole = new Role($id_film, $id_acteur);
$monRole->liaison();
?>


</body>
</html>
