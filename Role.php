<?php

include("connexion.php");

class Role
{

    /****************/
    /*    METHODE   */
    /***************/

    public function __construct($id_film, $id_acteur)
    {
        $this->id_acteur=$id_acteur;
        $this->id_film=$id_film;
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
                echo '<h1>Aucun changement dans la base de donnée</h1>
                        <div class="alert alert-warning"> <strong>Attention !</strong> La liaison ' . $id_film . ' - ' . $id_acteur . ' existe déjà. </div>';
            } else {

                //Ajout de la liaison
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `casting`(`ID_ACTEUR`, `ID_FILM`) VALUES (:a, :f)');
                $query->execute($infoLiaisonTableau);

                echo '<h1>La base de donnée à été mise à jour</h1>
                      <div class="alert alert-success"> <strong>Bravo!</strong> La liaison ' . $id_film . ' - ' . $id_acteur . ' a été inséré. </div>
                      ';

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