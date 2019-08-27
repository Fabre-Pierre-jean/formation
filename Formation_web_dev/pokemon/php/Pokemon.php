<?php
class Pokemon
{
    private $pok_id;
    private $pok_name;
    private $vie_base;
    private $evolution;
    private $pok_xp;
    private $urlImage;
    private $abilities;


    public function __construct(string $name,int $vie,int $evolution, int $xp)
    {
        $this->pok_name=$name;
        $this->pok_xp=$xp;
        $this->vie_base=$vie;
        $this->evolution=$evolution;
    }

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

    public function getVie():int{
        return $this->vie_base;
    }

    public function setVie($vie){
        $this->vie_base=$vie;
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
        return $this->pok_xp;
    }

    public function setXp($xp){
        $this->pok_xp=$xp;
        return $this;
    }
    public function getImage():string{
        return $this->urlImage;
    }

    public function getAbilities():array{
        return $this->abilities;
    }

    public function listPokemon(array $pokemon){
        foreach ($pokemon as $item) {
        echo "<pre>";
        echo '<img alt="pokemon" src='.$item["$urlImage"].'>';
        echo $item["$pok_name"];
        echo 'Vie:' . $item["$vie_base"];
        echo 'Xp:'. $item["$xp"];
        echo 'Evolution:' . $item["$evolution"];
        //echo "Ces attaques: " . array($abilities);
        echo "</pre>";
        
        }
    }
}