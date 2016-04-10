<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Ma première page en PHP !</title>
  </head>
  <body>
	<?php

function connectDb(){
    $host="localhost";
    $user="p1505707";
    $password="242869";
    $dbname="p1505707";
    
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
