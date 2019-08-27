<?php


class Zoo
{
    private $name;
    private $spotNb;
    private $animals = array();
    private $total = 0;

    public function __construct($name,$spotNb)
    {
        $this->name=$name;
        $this->spotNb=$spotNb;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSpotNb()
    {
        return $this->spotNb;
    }

    /**
     * @param mixed $spot
     */
    public function setSpotNb($spot)
    {
        $this->spotNb = $spot;
    }

    /**
     * @return mixed
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * @param mixed $animals
     */
    public function setAnimals($animals)
    {
        $this->animals = $animals;
    }

    public function addAnimal($animal){
        if(count($this->animals) >= $this->spotNb){
            echo "Il n'ya plus de places disponibles, mangez le!!!";
        }else {
            array_push($this->animals, $animal); // Push dans un tableau, on pouvait faire $this->animals[]=$animal
        }
    }

    public function delAnimal($name){
            unset($this->animals[array_search($name, $this->animals)]); // unset -> permet de VIDER une case d'un tableau; array_search -> permet de chercher dans un tableau la value donnée;
            array_values($this->animals); // permet de supprimer les cases vides dans un tableau
    }

    public function inventory(){
        return count($this->animals); // compte la longueur du tableau
    }

    public function __toString() //méthode magique commence par 2 underscores __
    {
        return "<p> Bienvenue au zoo: " . $this->name . " qui à actuellement " . $this->inventory() . " animaux, dont voici leurs caractéristiques: <br><br>" . implode("<br>",$this->animals) ."</p>";

    }
}