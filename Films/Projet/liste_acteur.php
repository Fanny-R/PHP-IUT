<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
    <?php include("connexion.php"); ?>
    <?php include("Acteur.php"); ?>
    <title>
        PutridTomatoes : <?php echo $_GET['nom_film']; ?>
    </title>
</head>
<body>

<p>
    <?php echo $_GET['nom_film']; ?>
</p>

<?php
$infoID = array('i' => $_GET['id_film']);
$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM `casting` INNER JOIN `acteur` ON `casting`.`ID_ACTEUR`=`acteur`.`ID_ACTEUR` AND `casting`.`ID_FILM`=:i');
$query->execute($infoID);
?>
<table>

    <?php
    $data = $query->fetch();
    if(empty($data)) {
        echo "Oh ! Personne n'a joué dans ce film. <a href='ajout_role.php'>En ajouter ?</a>";
    } else{

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
</table>

<a href="indexTEMP.php">Retour liste</a>
</body>
</html>