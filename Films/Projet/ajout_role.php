<?php include("top_page.php");?>

<title>PutridTomatoes</title>
</head>
<body>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM film');
$query->execute();
?>

<form>
    <select name="Film" size="1">

        <?php
        while ($data = $query->fetch()) {
            ?>
            <option value=""><?php echo $data['nom_film'] ?></option>
        <?php } ?>
    </select>

<?php

$bdd = connectDb();
$query = $bdd->prepare('SELECT * FROM acteur');
$query->execute();
?>

    <select name="Acteur" size="1">

        <?php
        while ($data = $query->fetch()) {
            ?>
            <option value=""><?php echo $data['PRENOM_ACTEUR'].' '.$data['NOM_ACTEUR'] ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Envoyer"/>

</form>


<?php include ("bottom_page.html");?>

