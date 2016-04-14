<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>PutridTomatoes : Ajout/Edition Film</title>
</head>

<body>
<?php require_once('autoload.php'); ?>

<!--Permet de récupérer les données propres à la création d'un film-->

<div class="container">
    <h2>Ajout d'un film</h2>
    <form role="form" method="post" action="insertionFilm.php">

        <div class="form-group">
            <label for="nom_film">Nom du film :</label>
            <input type="text" name="nom_film" id="nom_film" class="form-control" size="30" maxlength="50"/>
        </div>

        <div class="form-group">
            <label for="annee_prod">Année de production :</label>
            <input type="number" name="annee_prod" id="annee_prod" class="form-control" size="10" maxlength="10"
                   min="1880" max="2016"/>
        </div>

        <div id="input_form">
            <label for="score">Votre score :</label>
            <input type="number" name="score" id="score" size="10" step="0.01" min="0" max="10"/>
        </div>

        <input type="submit" class="btn btn-default" value="Envoyer"/>

    </form>
</div>

</body>
</html>