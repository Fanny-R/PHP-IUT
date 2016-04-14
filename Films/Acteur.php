<?php

/**
 * Class Acteur
 * Permet l'instanciation d'un objet Acteur
 */
class Acteur
{
    /**
     * @var Identifiant de l'acteur dans la base de donnée
     */
    public $id;
    
    /**
     * @var Nom de l'acteur
     */
    public $nom_acteur;
    
    /**
     * @var Prénom de l'acteur
     */
    public $prenom_acteur;

    /**
     * Acteur constructor.
     * @param $id 
     * @param $nom
     * @param $prenom
     */
    public function __construct($id, $nom, $prenom)
    {
        $this->id = $id;
        $this->nom_acteur = $nom;
        $this->prenom_acteur = $prenom;

    }

    /**
     * @return int 
     * Retourne l'identifiant d'un Acteur
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     * Retourne le nom d'un acteur
     */
    public function getNomActeur()
    {
        return $this->nom_acteur;
    }

    /**
     * @param $nom_acteur
     * Permet de mofifier le nom d'un acteur
     */
    public function setNomActeur($nom_acteur)
    {
        $this->nom_acteur = $nom_acteur;
    }

    /**
     * @return mixed
     * Retourne le prenom d'un acteur
     */
    public function getPrenomActeur()
    {
        return $this->prenom_acteur;
    }

    /**
     * @param $prenom_acteur
     * Permet de modifier le nom d'un acteur
     */
    public function setPrenomActeur($prenom_acteur)
    {
        $this->prenom_acteur = $prenom_acteur;
    }


}