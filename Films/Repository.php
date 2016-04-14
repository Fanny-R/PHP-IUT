<?php

/**
 * Class Repository
 * Permet la connexion à la BDD à ses enfants
 */
abstract class Repository
{
    /**
     * @var PDO
     * Objet de connexion
     */
    protected $PDO;

    /**
     * Repository constructor.
     * @param PDO $PDO
     */
    public function __construct(PDO $PDO)
    {
        $this->PDO = $PDO;
    }

    /**
     * @param $PDO
     * Permet de définir la connexion
     */
    public function setDb($PDO)
    {
        $this->$PDO = $PDO;
    }

}