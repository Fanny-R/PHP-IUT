<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>PutridTomatoes</title>
</head>
<body>
<?php require_once('autoload.php'); ?>


<div class="container">
    <h2>Selectionner l'acteur <strong>ou</strong> le film à supprimer</h2>
    <form role="form" method="post" action="supprimer_film.php">
        <div class="form-group">
            <label for="sel1">Sélectionner un film:</label>
            <select name="Film" size="1" class="form-control" id="sel1">

                <?php //Création d'un objet Film
                $bdd = connectDb();
                $query = $bdd->prepare('SELECT * FROM film');
                $query->execute();
                while ($data = $query->fetch()) {
                    $ceFilm = new Film($data['id_film'], $data["nom_film"], $data["annee_film"], $data["score"]);
                    ?>
                    <option value="<?php echo $ceFilm->getId() ?>">
                        <?php echo $ceFilm->getTitle() ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" class="btn btn-default" value="Supprimer"/>

    </form>
</div>
<hr>
<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM acteur');
$query->execute();
?>

<div class="container">
    <form role="form" method="post" action="supprimer_acteur.php">
        <div class="form-group">
            <label for="sel1">Sélectioner un acteur:</label>
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
        </div>
        <input type="submit" class="btn btn-default" value="Supprimer"/>
    </form>
</div>

</body>
</html>
