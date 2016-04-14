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
$title = $repoFilm->getFilm($id)->getTitle();
$valide =$supp_film->supprimer();

if ($valide) {
    echo '<h1>C\'était pas un bon film...</h1>
                        <div class="alert alert-success">
                      <strong>Parfait !</strong> Le film '.  $title .' a été supprimé. </div>';
} else {
    echo '<h1>J"ai rien senti</h1>
                      <div class="alert alert-warning">
                      <strong>Attention!</strong> Le film '.  $title .' ne fait pas parti de la base de donnée ou a déjà été supprimé.
                      </div>';
}
?>

</body>
</html>