<?php

/**
 * Class Film
 * Permet l'instanciation d'un objet Film
 */
class Film
{
    /**
     * @var
     * Variable permettant l'identification d'un film
     */
    private $id;

    /**
     * @var
     * Titre d'un film
     */
    private $title;

    /**
     * @var
     * Année de sortie d'un film
     */
    private $date;

    /**
     * @var
     * Score obtenu par un film
     */
    private $score;

    /**
     * Film constructor.
     * @param $id
     * @param $title
     * @param $date
     * @param $score
     * Permet la création d'un objet Film
     */
    public function __construct($id, $title, $date, $score)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->score = $score;
    }

    /**
     * @return mixed
     * Retourne l'année de sortie d'un film
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $date
     * Permet de modifier la date d'un film
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     * Retourne le score d'un film
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param $score
     * Permet de modifier le score d'un film
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     * Retourne le titre d'un film
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     * Permet de modifier un film
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     * Retourne l'identifiant d'un film
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * Permet de modifier l'identifiant d'un film
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}