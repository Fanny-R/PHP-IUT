<?php


class Film
{

    /****************/
    /*    METHODE   */
    /***************/
    public function __construct($id, $title, $date, $score)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->score = $score;
    }

    public function ajout()
    {
        $title = $this->getTitle();
        $date = $this->getDate();
        $score = $this->getScore();

        if (!empty($title) || !empty($date) || !empty($score)) {
            $infoFilmTableau = array('n' => $title, 'a' => $date, 's' => $score);
            $bdd = connectDb();
            $query = $bdd->prepare('SELECT COUNT(*) AS nb FROM `film` WHERE nom_film = :n');
//            $query->execute($infoFilmTableau);
//            Si je met cette ligne de code, le SELECT renvoie un data false au lieu d'un nom.
//            Donc pour l'instant justilise l'ancienne méthode mais elle n'est pas objet...

            $query->execute(array('n' => $_POST['nom_film']));
            $data = $query->fetch();

            if ($data['nb'] >= 1) {
                $bdd = connectDb();
                $query = $bdd->prepare('UPDATE `film` SET `annee_film`=:a,`score`=:s WHERE `nom_film`=:n');
                $query->execute($infoFilmTableau);

                echo '<h3>Le film ' . $title . ' a été mis à jour.</h3>';

            } else {

                //Ajout du film
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `film`(`nom_film`, `annee_film`, `score`) VALUES (:n, :a, :s)');
                $query->execute($infoFilmTableau);

                echo '<h3>Le film ' . $title . ' a été inséré.</h3>';

            }

        }

    }

    public function supprimer()
    {
        {
            $id = $this->id;

            if (!empty($id)) {
                $filmSuppTableau = array('i' => $id);
                $bdd = connectDb();
                $query = $bdd->prepare('DELETE FROM `film` WHERE id_film = :i');
                $query->execute($filmSuppTableau);

                $query = $bdd->prepare('DELETE FROM `casting` WHERE id_film = :i');
                $query->execute($filmSuppTableau);


                echo '<h3>Le film a été supprimé.</h3>';
            } else {
                echo '<h3>Le film ne fait pas parti de la base de donnée ou a déjà été supprimé.</h3>';
            }

        }
    }

    /****************/
    /*GETTER SETTTER*/
    /***************/
    public function getDate()
    {
        return $this->date;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /****************/
    /*  ATTRIBUTS  */
    /***************/

    private $id;
    private $title;
    private $date;
    private $score;
}