<?php

class Role
{

    /****************/
    /*    METHODE   */
    /***************/

    private $id_acteur;
    private $id_film;

    /****************/
    /*GETTER SETTTER*/
    /***************/

    public function __construct($id_film, $id_acteur)
    {
        $this->id_acteur = $id_acteur;
        $this->id_film = $id_film;
    }

    public function liaison()
    {

        $id_film = $this->getIdFilm();
        $id_acteur = $this->getIdActeur();

        if (!empty($id_film) || !empty($id_acteur)) {
            $infoLiaisonTableau = array('f' => $id_film, 'a' => $id_acteur);
            $bdd = connectDb();
            $query = $bdd->prepare('SELECT COUNT(*) AS nb FROM casting WHERE ID_FILM = :f && ID_ACTEUR = :a');
            $query->execute($infoLiaisonTableau);
            $data = $query->fetch();

            if ($data['nb'] >= 1) {
                return false;
            } else {
                //Ajout de la liaison
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `casting`(`ID_ACTEUR`, `ID_FILM`) VALUES (:a, :f)');
                $query->execute($infoLiaisonTableau);

                return true;
            }


        }


    }

    public function getIdFilm()
    {
        return $this->id_film;
    }

    public function setIdFilm($id_film)
    {
        $this->id_film = $id_film;
    }

    /****************/
    /*  ATTRIBUTS  */
    /***************/

    public function getIdActeur()
    {
        return $this->id_acteur;
    }

    public function setIdActeur($id_acteur)
    {
        $this->id_acteur = $id_acteur;
    }

}