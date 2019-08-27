<?php


class Combat
{
    private $pok_id;
    private $pok_name;
    private $attack_name;
    private $damages=5;
    private $attack_accuracy;
    private $xp;
    private $evolution;
    private $vie=100;

    public function getPokId():int{
        return $this->pok_id;
    }

    public function getName():string{
        return $this->pok_name;
    }

    public function setName($name){
        $this->pok_name=$name;
        return $this;
    }

    public function getAttack():int{
        return $this->attack_name;
    }

    public function setAttack($attack_name){
        $this->attack_name=$attack_name;
        return $this;
    }

    public function getDamages():int{
        return $this->damages;
    }

    public function setDamages($damages){
        $this->damages=$damages;
        return $this;
    }

    public function getAccuracy():int{
        return $this->attack_accuracy;
    }

    public function setAccuracy($accuracy){
        $this->attack_accuracy=$accuracy;
        return $this;
    }

    public function getEvolution():int{
        return $this->evolution;
    }

    public function setEvolution($evo){
        $this->evolution=$evo;
        return $this;
    }

    public function getXp():int{
        return $this->xp;
    }

    public function setXp($xp){
        $this->xp=$xp;
        return $this;
    }

    public function getVie():int{
        return $this->vie;
    }

    public function setVie($vie){
        $this->vie=$vie;
        return $this;
    }

    public function hit()
    {

    }

}
?>