<?php

class FilmRepository extends Repository
{


    /****************/
    /*    METHODE   */
    /***************/

    public function __construct(PDO $bdd)
    {
        parent::__construct($bdd);
    }

    public function getAllFilm()
    {
        $tableauFilm = array();
        $query = $this->PDO->prepare('SELECT * FROM film');
        $query->execute();


        while ($data = $query->fetch()) {
            $film = new Film($data['id_film'], $data['nom_film'], $data['annee_film'], $data['score']);
            array_push($tableauFilm, $film);
        }
            return $tableauFilm;
    }

    public function getFilm($id){
        
        $infoTableau = array('i'=> $id);
        $query = $this->PDO->prepare('SELECT * FROM film WHERE id_film=:i');
        $query->execute($infoTableau);
        $data=$query->fetch();
        if (!$data){
            echo '<p>Aucun film ne correspond</p>  ';
        }else{
        $film = new Film($data['id_film'], $data['nom_film'], $data['annee_film'], $data['score']);
            return $film;
        }

    }
    

}