<?php include("../top_page.php");?>

<title>PutridTomatoes</title>
</head>
<body>

<?php

$bdd=connectDb();
$query=$bdd->prepare('SELECT * FROM film');
$query->execute();


?>
<table>

    <?php
while ($data = $query->fetch()){


    ?>
<tr>
    <td><?php echo $data['nom_film']?></td>
    <td><?php echo $data['annee_film']?></td>
    <td><?php echo $data['score']?></td>
    <td> <a href="">Voir</a></td>

</tr>
<?php
}
?>
</table>
<a href="ajout_film.php">Ajout Film</a>
<a href="ajout_acteur.php">Ajout Acteur</a>
<a href="ajout_role.php">Editer Casting</a>

</body>
</html>
