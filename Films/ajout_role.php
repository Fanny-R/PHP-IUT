<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>PutridTomatoes : Edition Casting</title>
</head>
<body>
<?php require_once('autoload.php'); ?>

<!--Permet de récupérer les données propres à la création d'un role-->

<div class="container">
    <h2>Faite le lien entre acteur et film</h2>
    <form method="post" action="insertionRole.php" role="form">


        <div class=w"form-group">
            <label for="sel1">Sélectionner un film:</label>
            <select name="Film" size="1" class="form-control">
                <?php
                $repoFilm = new FilmRepository($PDO);
                $data = $repoFilm->getAllFilm();
                foreach ($data as $film) {
                    ?>
                    <option value="<?php echo $film->getId() ?>">
                        <?php echo $film->getTitle() ?>
                    </option>
                <?php } ?>
            </select>
        </div>


        <label for="sel1">Sélectionner un Acteur:</label>
        <select name="Acteur" size="1" class="form-control">

            <?php
            $repoActeur = new ActeurRepository($PDO);
            $data = $repoActeur->getAllActeur();
            foreach ($data as $acteur) {
                ?>
                <option value="<?php echo $acteur->getId() ?> ">
                    <?php echo $acteur->getPrenomActeur() . ' ' . $acteur->getNomActeur() ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" class="btn btn-default" value="Envoyer"/>
    </form>
</div>


</body>
</html>
