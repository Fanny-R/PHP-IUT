<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../style.css"/>
    <?php include("../class/film.php");
    ?>
    <title>PutridTomatoes</title>
</head>
<body>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM film');
$query->execute();
?>

<form method="post" action="../insertion/insertionRole.php">
        <select name="Film" size="1">


            <?php
            while ($data = $query->fetch()) {
                $ceFilm = new Film($data["nom_film"],$data["annee_film"],$data["score"]);//Création d'un objet Film
                ?>
                <option value="<?php echo $data['id_film'] ?>"><?php echo $ceFilm->getTitle() ?> </option>
            <?php } ?>
        </select>

<!--Pas encore en objet pour les acteurs -->
    <?php

    $bdd = connectDb();
    $query = $bdd->prepare('SELECT * FROM acteur');
    $query->execute();
    ?>

    <select name="Acteur" size="1">

        <?php
        while ($data = $query->fetch()) {
            ?>
            <option
                value="<?php echo $data['ID_ACTEUR'] ?>"><?php echo $data['PRENOM_ACTEUR'] . ' ' . $data['NOM_ACTEUR'] ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Envoyer"/>

</form>


<?php include("../bottom_page.html"); ?>

