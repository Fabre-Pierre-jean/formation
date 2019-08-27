<?php
include_once("meateater.php");

class Tiger extends Meateater
{
    protected $stripe;
    protected $quantity;

    public function __construct($name, $scream, $quantity, $species,$stripe)
    {
        parent::__construct($name, $scream, $quantity, $species);
        $this->stripe=$stripe;
    }

    public function __toString()
    {
        return $this->name ." est un " . $this->species ." avec " . $this->stripe . " rayures sur le cul qui mange " . $this->quantity . " kg de viande par jour ce qui nous coute " . $this->cost . " € et lorqu'elle est contente son cri est un " . $this->scream ;
    }


    /**
     * @return mixed
     */
    public function getStripe()
    {
        return $this->stripe;
    }

    /**
     * @param mixed $stripe
     */
    public function setStripe($stripe)
    {
        $this->stripe = $stripe;
    }

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


    public function cost($quantity){
        return $this->cost=pow(($quantity * 10),2) + 100 ;
    }

}