﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
		<?php include("film.php"); ?>

  </head>
  <body>
	Insertion dans la base de donnée.

    <?php
    $nom = $_POST['nom_film'];
    $annee = $_POST['annee_prod'];
    $score = $_POST['score'];
    $monFilm = new Film();
	$monFilm->ajout($nom,$annee,$score);
    ?>


<?php
//		$bdd=connectDb();
//		$query=$bdd->prepare('SELECT COUNT(*) AS nb FROM films WHERE nom_film = :n');
//		$query->execute(array('n'=> $_POST['nom_film']));
//		$data = $query->fetch();
//		$tableauValeur=array('n'=> $_POST['nom_film'],'a'=> $_POST['annee_prod'],'s'=> $_POST['score']);
//
//
//		if  ($data['nb'] >= 1){
//			$bdd=connectDb();
//			$query=$bdd->prepare('UPDATE `films` SET `annee_film`=:a,`score`=:s WHERE `nom_film`=:n');
//			$query->execute($tableauValeur);
//
//			echo 'Le film a été mis à jour.';
//
//		}
//		else{
//
//		//Ajout du film
//        $bdd=connectDb();
//		$query=$bdd->prepare('INSERT INTO `films`(`nom_film`, `annee_film`, `score`) VALUES (:n, :a, :s)');
//		$query->execute($tableauValeur);
//
//			echo 'Le film a été inséré.';
//
//		}
//
//		?>

  </body>
</html>