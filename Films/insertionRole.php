<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>

</head>
<body>
<?php include_once('Role.php'); ?>
<!--Autoloader ne trouve pas la classe Role pour la création de new Role(..);-->

<!--Ajout d'un Role en base de donnée, retour sur l'ajout ou non pour l'utilisateur-->


<?php require_once('autoload.php'); ?>

<?php
$id_film = $_POST['Film'];
$id_acteur = $_POST['Acteur'];
$monRole = new Role($id_film, $id_acteur);

$valide = $monRole->liaison();

if (!$valide) {
    echo '<h1>Aucun changement dans la base de donnée</h1>
                        <div class="alert alert-warning"> <strong>Attention !</strong> La liaison ' . $repoFilm->getFilm($id_film)->getTitle() . ' - ' . $repoActeur->getActeur($id_acteur)->getPrenomActeur() . ' ' . $repoActeur->getActeur($id_acteur)->getNomActeur() . ' existe déjà. </div>';
} else {
    echo '<h1>Un lien éternel</h1>
                      <div class="alert alert-success"> <strong>Bravo !</strong> La liaison ' . $repoFilm->getFilm($id_film)->getTitle() . ' - ' . $repoActeur->getActeur($id_acteur)->getPrenomActeur() . ' ' . $repoActeur->getActeur($id_acteur)->getNomActeur() . ' a été créée. </div>
                      ';

}
?>

</body>
</html>
