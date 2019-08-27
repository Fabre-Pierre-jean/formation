<?php
include_once("animal.php");

class Meateater extends Animal
{
    protected $quantity;
    protected $cost;

    public function __construct($name, $scream,$quantity,$species)
    {
        parent::__construct($name, $scream,$species);
        $this->quantity=$quantity;
    }

    public function __toString()
    {
            return $this->name . " est un " . $this->species . " qui mange " . $this->quantity . " kg de viande par jour ce qui nous coute " . $this->cost . " € et lorqu'elle est contente son cri est un " . $this->scream;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost): void
    {
        $this->cost = $cost;
    }

    public function cost($quantity){
            return $this->cost=pow(($quantity * 10),2) + 100 ;
    }
}