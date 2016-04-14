<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Inséré</title>

</head>
<body>
<?php require_once('autoload.php'); ?>

<?php
$id = $_POST['Film'];
$supp_film = new Film($id,null, null,null);
$supp_film->supprimer();
?>

</body>
</html>