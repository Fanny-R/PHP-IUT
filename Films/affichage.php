<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
  </head>
  <body>
	Mais c'est toujours du HTML non ?
	<?php
	
	
	 function connectDb(){
      $host="localhost"; // ou sql.hebergeur.com
      $user="login";
      $password="xxxxxx";
      $dbname="login";
  try {
       $pdo=new PDO('mysql:host='.$host.';dbname='.$dbname.
                    ';charset=utf8',$user,$password);

       return $pdo;
      } catch (Exception $e) {
       die('Erreur : '.$e->getMessage());
  }
 }

		$bdd=connectDb();
		$query=$bdd->prepare('SELECT * FROM films');
		$query->execute();
		
		while ($data = $query->fetch()){
			echo($data['nom_film']."<br>");
		}
		?>
  </body>
</html>
