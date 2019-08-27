<?php


class Combat
{
    private $pok_id;
    private $pokemon1;
    private $pokemon2;
    private $pok_name;
    private $attack_name;
    private $attack_accuracy;
    private $damages=5;
    private $pok_xp;
    private $evolution;
    private $urlimage;
    private $life;

    public function __construct(string $name, int $xp, int $vie_base, string $urlimage)
    {
        $this->pok_name = $name;
        $this->pok_xp = $xp;
        $this->urlimage=$urlimage;
        $this->life=$vie_base;
    }

    public function getPokId(){
        return $this->pok_id;
    }

    public function getName(){
        return $this->pok_name;
    }

    public function setName($name){
        $this->pok_name=$name;
        return $this;
    }

    public function getAttack(){
        return $this->attack_name;
    }

    public function setAttack($attack_name){
        $this->attack_name=$attack_name;
        return $this;
    }

    public function getDamages(){
        return $this->damages;
    }

    public function setDamages($damages){
        $this->damages=$damages;
        return $this;
    }

    public function getAccuracy(){
        return $this->attack_accuracy;
    }

    public function setAccuracy($accuracy){
        $this->attack_accuracy=$accuracy;
        return $this;
    }

    public function getEvolution(){
        return $this->evolution;
    }

    public function setEvolution($evo){
        $this->evolution=$evo;
        return $this;
    }

    public function getXp(){
        return $this->pok_xp;
    }

    public function setXp($xp){
        $this->pok_xp=$xp;
        return $this;
    }

    public function getLife(){
        echo "La vie de " . $this->pok_name . ": " . $this->life . "<br>";
        return $this->life;
    }

    public function setLife($life){
        $this->life=$life;
        return $this;
    }

    public function getVie()
    {

        return $this->life;
    }

    public function setVie($vie)
    {
        $this->vie_base = $vie;
        return $this;
    }


    public function getImage()
    {
        echo "<img src='$this->urlimage'>";
        return $this->urlimage;
    }

    public function setImage()
    {
        $this->urlimage=$urlimage;
        return $this;
    }


    public function hit($life,$damages)
    {
        if ($this->life <= 0) {
            echo $this->pok_name . "died!!";
        } else {
            $this->pok_vie -= $this->damages;
            return $this;
        }
    }

    public function winXp()
    {
        $this->pok_xp += 1;
    }

}
?>