<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php include "Acteur.php"; ?>
    <?php include "Film.php"; ?>
    <?php include "connexion.php"; ?>
    <title>PutridTomatoes : Edition Casting</title>
</head>
<body>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM film');
$query->execute();
?>
<div class="container">
    <h2>Selectionner l'acteur <strong>ou</strong> le film à supprimer</h2>
    <form method="post" action="insertionRole.php" role="form">
        <div class="form-group">
            <label for="sel1">Sélectionner un film:</label>
            <select name="Film" size="1" class="form-control" id="sel1">

                <?php //Création d'un objet Film
                while ($data = $query->fetch()) {
                    $ceFilm = new Film($data['id_film'], $data["nom_film"], $data["annee_film"], $data["score"]);
                    ?>
                    <option value="<?php echo $ceFilm->getId() ?>">
                        <?php echo $ceFilm->getTitle() ?>
                    </option>
                <?php } ?>
            </select>
            </select>
        </div>
        <?php

        $bdd = connectDb();
        $query = $bdd->prepare('SELECT * FROM acteur');
        $query->execute();
        ?>

        <label for="sel1">Sélectionner un Acteur:</label>
        <select name="Acteur" size="1" class="form-control" id="sel1">

            <?php //Création d'un objet Acteur
            while ($data = $query->fetch()) {
                $cetActeur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
                ?>
                <option value="<?php echo $cetActeur->getId() ?> ">
                    <?php echo $cetActeur->getPrenomActeur() . ' ' . $cetActeur->getNomActeur() ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" value="Envoyer"/>
    </form>
    <a href="indexTEMP.php">
        <button type="button" class="btn btn-default">Retour liste</button>
    </a>
</div>


</body>
</html>
