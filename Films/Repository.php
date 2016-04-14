<?php

class Repository
{


    /****************/
    /*    METHODE   */
    /***************/

    public function __construct(PDO $PDO)
    {
        $this->PDO=$PDO;
    }

    /****************/
    /*GETTER SETTTER*/
    /***************/

    public function setDb($PDO)
    {
        $this->$PDO = $PDO;
    }

    /****************/
    /*  ATTRIBUTS  */
    /***************/

    protected $PDO;

}