<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../style.css"/>
    <?php include("../connexion.php"); ?>
    <title>PutridTomatoes : Ajout/Edition Acteur</title>
</head>
<body>


<form method="post" action="../insertion/insertionActeur.php">

    <div id="input_form">
        <label for="prenom_acteur">Prénom:</label>
        <input type="text" name="prenom_acteur" id="prenom_acteur" size="30" maxlength="50"/>
    </div>

    <div id="input_form">
        <label for="nom_acteur">Nom:</label>
        <input type="text" name="nom_acteur" id="nom_acteur" size="30" maxlength="50"/>
    </div>


    <input type="submit" value="Envoyer"/>

</form>

<a href="indexTEMP.php">Retour liste</a>
</body>
</html>