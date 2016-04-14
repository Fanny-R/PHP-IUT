<?php

/**
 * Class ActeurRepository
 * Permet de créer un répertoire à Acteur
 */
class ActeurRepository extends Repository
{
    /**
     * ActeurRepository constructor.
     * @param PDO $bdd Connexion à la base de donnée
     */
    public function __construct(PDO $bdd)
    {
        parent::__construct($bdd);
    }

    /**
     * @return array
     * Retourne tous les acteurs de la base de donnée
     */
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

    /**
     * @param $id
     * @return Acteur
     * Retourne un acteur en particulier de la base de donnée
     */
    public function getActeur($id)
    {

        $infoTableau = array('i' => $id);
        $query = $this->PDO->prepare('SELECT * FROM acteur WHERE ID_ACTEUR=:i');
        $query->execute($infoTableau);
        $data = $query->fetch();
        if (!$data) {
            echo '<p>Aucun acteur ne correspond</p>  ';
        } else {
            $acteur = new Acteur($data['ID_ACTEUR'], $data['NOM_ACTEUR'], $data['PRENOM_ACTEUR']);
            return $acteur;
        }

    }

    /**
     * @param Acteur $acteur
     * @return bool
     * Permet d'ajouter un acteur à la base de donnée
     * Et renvoie si cela a été fait ou non
     */
    public function setActeur(Acteur $acteur)
    {
        {

            $nom_acteur = $acteur->getNomActeur();
            $prenom_acteur = $acteur->getPrenomActeur();

            if (!empty($nom_acteur) || !empty($prenom_acteur)) {
                $infoActeurTableau = array('n' => $nom_acteur, 'p' => $prenom_acteur);
                $query = $this->PDO->prepare('SELECT COUNT(*) AS nb FROM acteur WHERE NOM_ACTEUR = :n && PRENOM_ACTEUR = :p');
                $query->execute($infoActeurTableau);
                $data = $query->fetch();

                if ($data['nb'] >= 1) {

                    return false;

                } else {

                    //Ajout de l'acteur
                    $bdd = connectDb();
                    $query = $bdd->prepare('INSERT INTO `acteur`(`NOM_ACTEUR`, `PRENOM_ACTEUR`) VALUES (:n, :p)');
                    $query->execute($infoActeurTableau);

                    return true;
                }


            }
        }
    }

    /**
     * @param Acteur $acteur
     * @return bool
     * Permet de supprimer un acteur en base de donnée
     * Et renvoie si cela a été fait ou non
     */
    public function deleteActeur(Acteur $acteur)
    {
        {
            $id = $acteur->getId();

            if (!empty($id)) {
                $ActSuppTableau = array('a' => $id);
                $query = $this->PDO->prepare('DELETE FROM `acteur` WHERE ID_ACTEUR = :a');
                $query->execute($ActSuppTableau);

                $query = $this->PDO->prepare('DELETE FROM `casting` WHERE ID_ACTEUR = :a');
                $query->execute($ActSuppTableau);
                return true;
            } else {
                return false;
            }


        }
    }


}