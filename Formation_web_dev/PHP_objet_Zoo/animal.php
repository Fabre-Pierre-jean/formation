<?php


abstract class Animal
{
  protected $scream;
  protected $name;
  protected $species;

  public function __construct($name, $scream,$species)
  {
        $this->name=$name;
        $this->scream=$scream;
        $this->species=$species;
  }

    /**
     * @return mixed
     */
    public function getScream()
    {
        return $this->scream;
    }

    /**
     * @param mixed $scream
     */
    public function setScream($scream)
    {
        $this->scream = $scream;
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
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species): void
    {
        $this->species = $species;
    }
}