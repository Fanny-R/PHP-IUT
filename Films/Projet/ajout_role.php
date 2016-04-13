<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <?php include "Acteur.php";?>
    <?php include "Film.php";?>
    <?php include "connexion.php";?>
    <title>PutridTomatoes : Edition Casting</title>
</head>
<body>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM film');
$query->execute();
?>

<form method="post" action="insertionRole.php">
    <label>
        <select name="Film" size="1">


            <?php //Création d'un objet Film
            while ($data = $query->fetch()) {
                $ceFilm = new Film($data['id_film'], $data["nom_film"], $data["annee_film"], $data["score"]);
                ?>
                <option value="<?php echo $ceFilm->getId() ?>">
                    <?php echo $ceFilm->getTitle() ?>
                </option>
            <?php } ?>
        </select>
    </label>

    <?php

    $bdd = connectDb();
    $query = $bdd->prepare('SELECT * FROM acteur');
    $query->execute();
    ?>

    <label>
        <select name="Acteur" size="1">

            <?php //Création d'un objet Acteur
            while ($data = $query->fetch()) {
                $cetActeur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
                ?>
                <option value="<?php echo $cetActeur->getId() ?> ">
                    <?php echo $cetActeur->getPrenomActeur() . ' ' . $cetActeur->getNomActeur() ?>
                </option>
            <?php } ?>
        </select>
    </label>

    <input type="submit" value="Envoyer"/>

</form>


<a href="indexTEMP.php">Retour liste</a>
</body>
</html>
