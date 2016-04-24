<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Insertion</title>


</head>
<body>
<?php require_once('autoload.php'); ?>

<!--Ajout d'un Film en base de donnée, retour sur l'ajout ou non pour l'utilisateur-->

<?php
$nom = $_POST['nom_film'];
$annee = $_POST['annee_prod'];
$score = $_POST['score'];

if (!empty($nom) && (1880 <= $annee) && ($annee <= 2016) && ($score <= 10) && ($score >= 0)) {
    $monFilm = new Film(NULL, $nom, $annee, $score);
    $valide = $repoFilm->setFilm($monFilm);

    if ($valide === 1) {
        echo '<h1>Merci de la modification !</h1>
                      <div class="alert alert-success">
                      <strong>Parfait !</strong> Le film ' . $nom . ' a été mis à jour.
                      </div>';

    } else {

        echo '<h1>Et un de plus !</h1>
                      <div class="alert alert-success">
                      <strong>Parfait !</strong> Le film ' . $nom. ' a été inséré.
                      </div>';

    }

} else {
    echo '<h1>Mauvaise valeurs</h1>
                      <div class="alert alert-danger">
                      <strong>Attention !</strong> Les valeurs ne sont pas correctes.
                      </div>';
}


?>


</body>
</html>
