<?php


class Acteur
{

    /****************/
    /*    METHODE   */
    /***************/
    public function __construct($id, $nom, $prenom)
    {
        $this->id = $id;
        $this->nom_acteur = $nom;
        $this->prenom_acteur = $prenom;

    }

    public function ajout()
    {

        $nom_acteur = $this->getNomActeur();
        $prenom_acteur = $this->getPrenomActeur();

        if (!empty($nom_acteur) || !empty($prenom_acteur)) {
            $infoActeurTableau = array('n' => $nom_acteur, 'p' => $prenom_acteur);
            $bdd = connectDb();
            $query = $bdd->prepare('SELECT COUNT(*) AS nb FROM acteur WHERE NOM_ACTEUR = :n && PRENOM_ACTEUR = :p');
            $query->execute($infoActeurTableau);
            $data = $query->fetch();

            if ($data['nb'] >= 1) {

                echo '<h1>On copie pas !</h1>
                      <div class="alert alert-warning">
                      <strong>Attention !</strong> L"acteur ' . $prenom_acteur . ' ' . $nom_acteur . ' existe déjà 
                      </div>';

            } else {

                //Ajout du film
                $bdd = connectDb();
                $query = $bdd->prepare('INSERT INTO `acteur`(`NOM_ACTEUR`, `PRENOM_ACTEUR`) VALUES (:n, :p)');
                $query->execute($infoActeurTableau);

                echo '<h1>Bienvenue, tu verras, on est bien.</h1>
                      <div class="alert alert-success">
                      <strong>Bravo !</strong> L"acteur ' . $prenom_acteur . ' ' . $nom_acteur . ' a été inséré.
                      </div>';

            }


        }
    }

    public function supprimer()
    {
        {
            $id = $this->id;

            if (!empty($id)) {
                $ActSuppTableau = array('a' => $id);
                $bdd = connectDb();
                $query = $bdd->prepare('DELETE FROM `acteur` WHERE ID_ACTEUR = :a');
                $query->execute($ActSuppTableau);

                $query = $bdd->prepare('DELETE FROM `casting` WHERE ID_ACTEUR = :a');
                $query->execute($ActSuppTableau);


                echo '<h1>De toute, je l"aimais pas</h1>
                      <div class="alert alert-success">
                      <strong>Parfait !</strong> L"acteur a été supprimé.
                      </div>';
            } else {
                echo '<h1>Jamais entendu parler</h1>
                      <div class="alert alert-warning">
                      <strong>Attention !</strong> L"acteur ne fait pas parti de la base de donnée ou a déjà été supprimé.
                      </div>';
            }


        }
    }

    /****************/
    /*GETTER SETTTER*/
    /***************/

    public function getId()
    {
        return $this->id;
    }

    public function getNomActeur()
    {
        return $this->nom_acteur;
    }

    public function getPrenomActeur()
    {
        return $this->prenom_acteur;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNomActeur($nom_acteur)
    {
        $this->nom_acteur = $nom_acteur;
    }

    public function setPrenomActeur($prenom_acteur)
    {
        $this->prenom_acteur = $prenom_acteur;
    }

    /****************/
    /*  ATTRIBUTS  */
    /***************/

    public $id;
    public $nom_acteur;
    public $prenom_acteur;


}