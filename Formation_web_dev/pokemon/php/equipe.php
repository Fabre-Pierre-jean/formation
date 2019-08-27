<?php
require ("Pokemon.php");

class team
{
    private $user_id;
    private $user_name;
    private $pok_id;
    private $pok_name;
    private $pok_1;
    private $pok_2;
    private $active_user;



    public function getUserName(): string
    {
        return $this->user_name;
    }
    public function setUserName($username)
    {
        $this->user_name=$username;
    }

    public function getPokName(): string
    {
        return $this->pok_name;
    }
    public function setPokName($pokname)
    {
        $this->pok_name=$pokname;
    }
    public function setPok1($poke1)
    {
        $this->pok_name=$poke1;
    }
    public function setPok2($poke2)
    {
        $this->pok_name=$poke2;
    }

    public function __construct ($user_name,$pok_1,$pok_2){
        $this->user_name=$user_name;
        $this->pok_1=$pok_1;
        $this->pok_2=$pok_2;
    }
}