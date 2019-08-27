<?php

include_once("animal.php");

class Vegetarian extends Animal
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
        return $this->name ." est un " . $this->species ." qui mange " . $this->quantity . " kg de fruits par jour ce qui nous coute " . $this->cost . " € et lorqu'elle est contente son cri est un " . $this->scream ;
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
        return $this->cost=1.2 * log10(($quantity + 5) * 2 + 1);
    }
}