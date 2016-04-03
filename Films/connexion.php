<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
  </head>
  <body>
	<?php

function connectDb(){
      $host="sql.hebergeur.com";
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
  
  		?>
		
  </body>
</html>
