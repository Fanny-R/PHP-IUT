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

<!--Suppression d'un film-->
<div class="container">
    <h2>Selectionner l'acteur <strong>ou</strong> le film à supprimer</h2>
    <form method="post" action="supprimer_film.php">
        <div class="form-group">
            <label for="sel1">Sélectionner un film:</label>
            <select name="Film" size="1" class="form-control" id="sel1">

                <?php
                $data = $repoFilm->getAllFilm();
                foreach ($data as $film) {
                    ?>
                    <option value="<?php echo $film->getId() ?>">
                        <?php echo $film->getTitle() ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" class="btn btn-default" value="Supprimer"/>

    </form>
</div>
<hr>

<!--Suppression d'un acteur-->
<div class="container">
    <form method="post" action="supprimer_acteur.php">
        <div class="form-group">
            <label for="sel2">Sélectioner un acteur:</label>
            <select name="Acteur" size="1" class="form-control" id="sel2">

                <?php
                $data = $repoActeur->getAllActeur();
                foreach ($data as $acteur) {
                    ?>
                    <option value="<?php echo $acteur->getId() ?> ">
                        <?php echo $acteur->getPrenomActeur() . ' ' . $acteur->getNomActeur() ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <input type="submit" class="btn btn-default" value="Supprimer"/>
    </form>
</div>

</body>
</html>
