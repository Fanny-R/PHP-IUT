<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <?php include("connexion.php"); ?>
    <?php include ("Film.php");?>
    <title>PutridTomatoes</title>
</head>
<body>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM film');
$query->execute();


?>
<table>

    <?php
    while ($data = $query->fetch()) {
        $film = new Film($data["id_film"],$data["nom_film"],$data["annee_film"],$data["score"]);


        ?>
        <tr>
            <td><?php echo $film->getTitle() ?></td>
            <td><?php echo $film->getDate() ?></td>
            <td><?php echo $film->getScore() ?></td>
            <td><a href="liste_acteur.php?id_film=<?php echo $film->getId();?> &amp; nom_film=<?php echo $film->getTitle();?>">Voir</a></td>

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
