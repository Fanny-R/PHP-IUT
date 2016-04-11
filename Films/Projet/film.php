<?php
include("connexion.php");


class Film {

    /****************/
    /*    METHODE   */
    /***************/

    public function ajout($title,$date,$score){

        if (!empty($title) || !empty($date) || !empty($score)){
            $bdd=connectDb();
            $query=$bdd->prepare('SELECT COUNT(*) AS nb FROM films WHERE nom_film = :n');
            $query->execute(array('n'=> $_POST['nom_film']));
            $data = $query->fetch();
            $tableauValeur=array('n'=> $_POST['nom_film'],'a'=> $_POST['annee_prod'],'s'=> $_POST['score']);


            if  ($data['nb'] >= 1){
                $bdd=connectDb();
                $query=$bdd->prepare('UPDATE `films` SET `annee_film`=:a,`score`=:s WHERE `nom_film`=:n');
                $query->execute($tableauValeur);

                echo 'Le film a été mis à jour.';

            }
            else {

                //Ajout du film
                $bdd=connectDb();
                $query=$bdd->prepare('INSERT INTO `films`(`nom_film`, `annee_film`, `score`) VALUES (:n, :a, :s)');
                $query->execute($tableauValeur);

                echo 'Le film a été inséré.';

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
    public $title;
    public $date;
    public $score;

}
?>