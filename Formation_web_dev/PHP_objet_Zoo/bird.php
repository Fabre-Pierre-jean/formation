<?php
include_once("meateater.php");

class Bird extends Meateater
{
    protected $envergure;
    protected $quantity;

    public function __construct($name, $scream, $quantity, $species, $envergure)
    {
        parent::__construct($name, $scream, $quantity, $species);
        $this->envergure=$envergure;
    }

    public function __toString()
    {
        return $this->name ." est un " . $this->species ." qui mange " . $this->quantity . " kg de fruits par jour ce qui nous coute " . $this->cost . " € et lorqu'elle est contente son cri est : " . $this->scream ;
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
    public function getEnvergure()
    {
        return $this->envergure;
    }

    /**
     * @param mixed $envergure
     */
    public function setEnvergure($envergure)
    {
        $this->envergure = $envergure;
    }

    public function cost($quantity){
        return $this->cost=1.2 * log(($quantity + 5) * 2 + 1);
    }
}