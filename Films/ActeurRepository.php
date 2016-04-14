<?php

class ActeurRepository extends Repository{
    /****************/
    /*    METHODE   */
    /***************/

    public function __construct(PDO $bdd)
    {
        parent::__construct($bdd);
    }

    public function getAllActeur()
    {
        $tableauActeur = array();
        $query = $this->PDO->prepare('SELECT * FROM acteur');
        $query->execute();


        while ($data = $query->fetch()) {
            $acteur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
            array_push($tableauActeur, $acteur);
        }
        return $tableauActeur;
    }

    public function getActeur($id){

        $infoTableau = array('i'=> $id);
        $query = $this->PDO->prepare('SELECT * FROM acteur WHERE ID_ACTEUR=:i');
        $query->execute($infoTableau);
        $data=$query->fetch();
        if (!$data){
            echo '<p>Aucun acteur ne correspond</p>  ';
        }else{
            $acteur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
            return $acteur;
        }

    }
    

}