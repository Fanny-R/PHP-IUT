<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
		<?php include("connexion.php"); ?>
  </head>
  <body>
	Mais c'est toujours du HTML non ?
	<?php
	
		$bdd=connectDb();
		$query=$bdd->prepare('SELECT * FROM film');
		$query->execute();
		
		while ($data = $query->fetch()){
			echo($data['nom_film']."<br>");
		}
		?>
  </body>
</html>
