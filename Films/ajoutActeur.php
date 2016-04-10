<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
	<?php include("connexion.php"); ?>
  </head>
  <body>
  
  <form method="post" action="insertionFilm.php">

    <p>

        <label for="nom_film">Nom :</label>
        <input type="text" name="nom_acteur" id="nom_acteur" size="30" maxlength="50" />

        <label for="annee_prod">Prenom :</label>
        <input type="text" name="prenom_acteur" id="prenom_acteur"  size="30" maxlength="10" />


    </p>
	
	<input type="submit" value="Envoyer" ></code>

</form>





  </body>
</html>