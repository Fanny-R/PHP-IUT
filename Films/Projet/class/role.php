<?php

include("../connexion.php");

class role
{

    /****************/
    /*    METHODE   */
    /***************/

    public function liaison($id_film, $id_acteur)
    {

        if (!empty($id_film) || !empty($id_acteur)) {
            $infoLiaisonTableau = array('f' => $id_film, 'a' => $id_acteur);
            $bdd = connectDb();
            $query = $bdd->prepare('SELECT COUNT(*) AS nb FROM casting WHERE ID_FILM = :f && ID_ACTEUR = :a');
            $query->execute($infoLiaisonTableau);
            $data = $query->fetch();

            if ($data['nb'] >= 1) {
                echo 'La liaison ' . $id_film . ' - ' . $id_acteur . ' existe déjà.';

            } else {

                //Ajout de la liaison
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `casting`(`ID_ACTEUR`, `ID_FILM`) VALUES (:a, :f)');
                $query->execute($infoLiaisonTableau);

                echo 'La liaison ' . $id_film . ' - ' . $id_acteur . ' a été inséré.';

            }

        }


    }

    /****************/
    /*GETTER SETTTER*/
    /***************/

    public function getIdActeur()
    {
        return $this->id_acteur;
    }

    public function getIdFilm()
    {
        return $this->id_film;
    }

    public function setIdActeur($id_acteur)
    {
        $this->id_acteur = $id_acteur;
    }

    public function setIdFilm($id_film)
    {
        $this->id_film = $id_film;
    }

    /****************/
    /*  ATTRIBUTS  */
    /***************/

    private $id_acteur;
    private $id_film;

}