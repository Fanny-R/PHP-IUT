<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>PutridTomatoes</title>
</head>
<body>
<?php require_once('autoload.php'); ?>

<div class="container">
    <h2>Liste des films</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $bdd = connectDb();
        $query = $bdd->prepare('SELECT * FROM film');
        $query->execute();


        while ($data = $query->fetch()) {
            $film = new Film($data["id_film"], $data["nom_film"], $data["annee_film"], $data["score"]);


            ?>
            <tr>
                <td><?php echo $film->getTitle() ?></td>
                <td><?php echo $film->getDate() ?></td>
                <td><?php echo $film->getScore() ?></td>
                <td>
                    <a href="liste_acteur.php?id_film=<?php echo $film->getId(); ?>&amp;nom_film=<?php echo $film->getTitle(); ?>">Voir</a>
                </td>

            </tr>
            <?php
        }
        ?>

        </tbody>
    </table>
</div>

</body>
</html>