<?php

/**
 * Class FilmRepository
 * Classe permettant l'instatiation d'un objet répertoire de film
 */
class FilmRepository extends Repository
{
    /**
     * FilmRepository constructor.
     * @param PDO $bdd
     */
    public function __construct(PDO $bdd)
    {
        parent::__construct($bdd);
    }

    /**
     * @return array
     * Retourne tous les films se trouvant dans la BDD
     */
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

    /**
     * @param $id
     * @return Film
     * Retourne un film
     */
    public function getFilm($id)
    {

        $infoTableau = array('i' => $id);
        $query = $this->PDO->prepare('SELECT * FROM film WHERE id_film=:i');
        $query->execute($infoTableau);
        $data = $query->fetch();
        if (!$data) {
            echo '<p>Aucun film ne correspond</p>  ';
        } else {
            $film = new Film($data['id_film'], $data['nom_film'], $data['annee_film'], $data['score']);
            return $film;
        }

    }

    /**
     * @param Film $film
     * @return int
     * Permet l'ajout d'un film
     */
    public function setFilm(Film $film)
    {
        $title = $film->getTitle();
        $date = $film->getDate();
        $score = $film->getScore();
        $infoFilmTableau = array('n' => $title, 'a' => $date, 's' => $score);


        $query = $this->PDO->prepare('SELECT COUNT(*) AS nb FROM `film` WHERE nom_film = :n');
        $query->execute(array('n' => $_POST['nom_film']));
        $data = $query->fetch();

        if ($data['nb'] >= 1) {
            $bdd = connectDb();
            $query = $bdd->prepare('UPDATE `film` SET `annee_film`=:a,`score`=:s WHERE `nom_film`=:n');
            $query->execute($infoFilmTableau);
            return 1;

        } else {

            //Ajout du film
            $bdd = connectDb();
            $query = $bdd->prepare('INSERT INTO `film`(`nom_film`, `annee_film`, `score`) VALUES (:n, :a, :s)');
            $query->execute($infoFilmTableau);
            return 2;
        }


    }

    /**
     * @param Film $film
     * @return bool
     * Permet la suppression d'un film
     */
    public function deleteFilm(Film $film)
    {
        {
            $id = $film->getId();

            if (!empty($id)) {
                $filmSuppTableau = array('i' => $id);
                $query = $this->PDO->prepare('DELETE FROM `film` WHERE id_film = :i');
                $query->execute($filmSuppTableau);

                $query = $this->PDO->prepare('DELETE FROM `casting` WHERE id_film = :i');
                $query->execute($filmSuppTableau);
                return true;
            } else {
                return false;
            }


        }
    }
}