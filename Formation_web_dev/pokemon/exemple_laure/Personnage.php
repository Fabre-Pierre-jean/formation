<?php

class Personnage
{
    private String $nom;
    private $force;
    private $localisation;
    private $degats;
    private  $xp =0;

    public function __construct($nom, $loc)
    {
        $this->nom = $nom;
        $this->localisation = $loc;
    }

    /**
     * Méthode qui permet d'incrémenter l'xp par la valeur reçue
     * @param int $exp
     * @return int
     */
    public function gainXp(integer $exp) : integer
    {
        return $this->xp = $this->xp+$exp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param String $nom
     * @return String
     */
    public function setNom(String $nom)
    {
        $this->nom = $nom;
        return $this;
    }


}