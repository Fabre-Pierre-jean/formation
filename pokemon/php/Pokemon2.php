<?php


class Pokemon
{

    private $pok_id;
    private $pok_name;
    private $vie_base = 100;
    private $evolution;
    private $pok_xp;
    private $urlimage;
    private $abilities;

    private $attack_name;
    private $damages = 5;
    private $attack_accuracy;
    private $xp;

    public function getPokId()
    {
        return $this->pok_id;
    }

    public function getName()
    {
        return $this->pok_name;
    }

    public function setName($name)
    {
        $this->pok_name = $name;
        return $this;
    }

    public function getAttack()
    {
        return $this->attack_name;
    }

    public function setAttack($attack_name)
    {
        $this->attack_name = $attack_name;
        return $this;
    }

    public function getDamages()
    {
        return $this->damages;
    }

    public function setDamages($damages)
    {
        $this->damages = $damages;
        return $this;
    }

    public function getAccuracy()
    {
        return $this->attack_accuracy;
    }

    public function setAccuracy($accuracy)
    {
        $this->attack_accuracy = $accuracy;
        return $this;
    }

    public function getEvolution()
    {
        return $this->evolution;
    }

    public function setEvolution($evo)
    {
        $this->evolution = $evo;
        return $this;
    }

    public function getXp()
    {
        echo $this->xp . "<br>";
        return $this->xp;
    }

    public function setXp($xp)
    {
        $this->xp = $xp;
        return $this;
    }

    public function getVie()
    {
        echo "La vie de " . $this->pok_name . ":" . $this->vie_base . "<br>";
        return $this->vie_base;
    }

    public function setVie($vie)
    {
        $this->vie_base = $vie;
        return $this;
    }

    public function __construct(string $name, int $evolution, int $xp)
    {
        $this->pok_name = $name;
        $this->pok_xp = $xp;
        //$this->abilities=array($abilities);
        $this->evolution = $evolution;
        //$this->urlImage=$urlImage;
    }


    public function getImage()
    {
        return $this->urlimage;
    }

    public function getAbilities()
    {
        return $this->abilities;
    }

    public function winXp()
    {
        $this->xp += 1;
    }


    }


}
?>