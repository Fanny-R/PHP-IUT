<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Inséré</title>
    <?php include("acteur.php"); ?>
</head>
<body>
Insertion dans la base de donnée.

<?php
$nom_acteur = $_POST['nom_acteur'];
$prenom_acteur = $_POST['prenom_acteur'];
$monActeur = new Acteur();
$monActeur->ajout($nom_acteur, $prenom_acteur);
?>
<?php
//		$bdd=connectDb();
//
//
//		$query=$bdd->prepare('SELECT COUNT(*) AS nb FROM films WHERE nom_film = :n');
//		$query->execute(array('n'=> $_POST['nom_film']));
//		$data = $query->fetch();
//
//
//		//Création du tableau
//		$tableauValeur=array('n'=> $_POST['nom_film'],'a'=> $_POST['annee_prod'],'s'=> $_POST['score']);
//		//var_dump ($data['nb']);
//		//var_dump ($tableauValeur);
//
//
//
//		// Update du film
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
//			echo 'L"acteur  a été inséré.';
//
//		}
//
//
?>

</body>
</html>
