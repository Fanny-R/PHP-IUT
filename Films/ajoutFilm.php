<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
	<?php include("connexion.php"); ?>
  </head>
  <body>
  
  <form method="post" action="Projet/insertionFilm.php">

    <p>

        <label for="nom_film">Nom du film :</label>
        <input type="text" name="nom_film" id="nom_film" size="30" maxlength="50" />

        <label for="annee_prod">Année de production :</label>
        <input type="number" name="annee_prod" id="annee_prod"  size="30" maxlength="10" />

        <label for="score">Votre score :</label>
        <input type="number" name="score" id="score" size="30" maxlength="10" />

    </p>
	
	<input type="submit" value="Envoyer" ></code>

</form>





  </body>
</html>