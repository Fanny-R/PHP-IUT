<?php
include("../connexion.php");


class Film
{

    /****************/
    /*    METHODE   */
    /***************/
    public function __construct($title, $date, $score)
    {
        $this->title = $title;
        $this->date = $date;
        $this->score = $score;
    }

    public function ajout($title, $date, $score)
    {
        if (!empty($title) || !empty($date) || !empty($score)) {
            $bdd = connectDb();
            $query = $bdd->prepare('SELECT COUNT(*) AS nb FROM film WHERE nom_film = :n');
            $query->execute(array('n' => $title));
            $data = $query->fetch();
            $tableauValeur = array('n' => $title, 'a' => $date, 's' => $score);

            if ($data['nb'] >= 1) {
                $bdd = connectDb();
                $query = $bdd->prepare('UPDATE `film` SET `annee_film`=:a,`score`=:s WHERE `nom_film`=:n');
                $query->execute($tableauValeur);

                echo 'Le film ' . $title . ' a été mis à jour.';

            } else {

                //Ajout du film
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `film`(`nom_film`, `annee_film`, `score`) VALUES (:n, :a, :s)');
                $query->execute($tableauValeur);

                echo 'Le film ' . $title . ' a été inséré.';

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

    /****************/
    /*  ATTRIBUTS  */
    /***************/
    private $title;
    private $date;
    private $score;
}