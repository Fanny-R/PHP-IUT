<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>
        PutridTomatoes : <?php echo $_GET['nom_film']; ?>
    </title>
</head>
<body>
<?php require_once('autoload.php'); ?>


<div class="container">
    <h2>
        <?php echo $_GET['nom_film']; ?> : Les acteurs
    </h2>


    <?php
    $infoID = array('i' => $_GET['id_film']);
    $bdd = connectDb();
    $query = $bdd->prepare('SELECT * FROM `casting` INNER JOIN `acteur` ON `casting`.`ID_ACTEUR`=`acteur`.`ID_ACTEUR` AND `casting`.`ID_FILM`=:i');
    $query->execute($infoID);
    $data = $query->fetch();
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

        while (!empty($data)) {
            $acteur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
            ?>
            <tr>
                <td><?php echo $acteur->getPrenomActeur(); ?></td>
                <td><?php echo $acteur->getNomActeur(); ?></td>
            </tr>
            <?php
            $data = $query->fetch();
        }
        }
        ?>
        </tbody>
    </table>

</div>
</body>
</html>