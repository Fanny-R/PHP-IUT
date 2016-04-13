<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <?php include("connexion.php"); ?>
    <title>PutridTomatoes : Ajout/Edition Acteur</title>
</head>
<body>

<div class="container">
    <h2>Ajout d'un acteur</h2>
    <form role="form" method="post" action="insertionActeur.php">

        <div class="form-group">
            <label for="prenom_acteur">Prénom:</label>
            <input type="text" name="prenom_acteur" id="prenom_acteur" class="form-control" size="30"
                   maxlength="50"/>
        </div>

        <div class="form-group">
            <label for="nom_acteur">Nom:</label>
            <input type="text" name="nom_acteur" id="nom_acteur" class="form-control" size="30" maxlength="50"/>
        </div>


        <input type="submit" class="btn btn-default" value="Envoyer"/>

    </form>
    <a href="indexTEMP.php">
        <button type="button" class="btn btn-default">Retour liste</button>
    </a>
</div>

</body>
</html>