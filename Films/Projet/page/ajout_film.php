<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../style.css"/>
    <?php include("../connexion.php"); ?>
    <title>PutridTomatoes : Ajout/Edition Film</title>
</head>

<body>

<form method="post" action="../insertion/insertionFilm.php">

    <div id="input_form">
        <label for="nom_film">Nom du film :</label>
        <input type="text" name="nom_film" id="nom_film" size="30" maxlength="50"/>
    </div>

    <div id="input_form">
        <label for="annee_prod">Année de production :</label>
        <input type="number" name="annee_prod" id="annee_prod" size="10" maxlength="10" min="1800"/>
    </div>

    <div id="input_form">
        <label for="score">Votre score :</label>
        <input type="number" name="score" id="score" size="10" step="0.01" min="0" max="10"/>
    </div>

    <input type="submit" value="Envoyer"/>

</form>

<a href="indexTEMP.php">Retour liste</a>
</body>
</html>