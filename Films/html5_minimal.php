<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
  </head>
  <body>
	Mais c'est toujours du HTML non ?
	<?php echo("Je suis du joli texte genere par PHP") ?>

	
		<?php 
		$bdd=connectDb;
		$query=$bdd->prepare('SELECT * FROM films');
		$query->execute();		
		?>
  </body>
</html>
