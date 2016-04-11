<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
		<?php include("../class/role.php"); ?>

</head>
<body>
Liaison faite dans la base de donnée.

<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole = new role();
$monRole->liaison($id_film,$id_acteur);
?>




</body>
</html>
