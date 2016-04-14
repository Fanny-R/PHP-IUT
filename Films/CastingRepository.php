<?php

/**
 * Class CastingRepository
 * Permet l'instation d'un objet répertoire des castings
 */
class CastingRepository extends Repository
{
    
    public function __construct(PDO $PDO)
    {
        parent::__construct($PDO);
    }
    
    public function ActeurParFilm($id){
        $infoID = array('i' => $id);
        $query = $this->PDO->prepare('SELECT * FROM `casting` INNER JOIN `acteur` ON `casting`.`ID_ACTEUR`=`acteur`.`ID_ACTEUR` AND `casting`.`ID_FILM`=:i');
        $query->execute($infoID);
        $tableauCasting = array();

        while ($data = $query->fetch()) {
            $acteur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
            array_push($tableauCasting, $acteur);
        }
        return $tableauCasting;
    }
    

}