<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--        Permet de remplacer les underscore du lien en espace-->
    <title>
        PutridTomatoes : <?php echo str_replace('_', ' ', $_GET['nom_film']); ?>
    </title>
</head>
<body>
<?php require_once('autoload.php'); ?>


<div class="container">
    <h2>
        <?php echo str_replace('_', ' ', $_GET['nom_film']); ?> : Les acteurs
    </h2>

    <!--Affichage des acteurs par rapport à un film-->
    <?php
    $id = $_GET['id_film'];
    $data = $repoCasting->ActeurParFilm($id);
    
    if (empty($data)) {
        echo "Oh ! Personne n'a joué dans ce film. <a href='ajout_role.php'>En ajouter ?</a>";
    } else {
    ?>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
        </thead>
        <tbody>
        <?php

       foreach ($data as $acteur){
            ?>
            <tr>
                <td><?php echo $acteur->getPrenomActeur(); ?></td>
                <td><?php echo $acteur->getNomActeur(); ?></td>
            </tr>

            <?php
        }
                ?>
         </tbody>
    </table>
         <?php
        }
        ?>


</div>
</body>
</html>