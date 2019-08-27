<?php
/**
 *
 pke1=*/

class Attaque
{


  private $intensite;
  private $defense;
  private $experience;
  private $niveau;



  function __construct( $Intensite, $Defense,$Experience,$Niveau)

  {

 $this->intensite=$Intensite;
 $this->experience=$Experience;
 $this->defense=$Defense;
 $this->niveau=$Niveau;

}
  public function degat(){

  $degat = (($this->niveau *0.4+2)*$this->intensite*$this->experience) /($this->defense*50 )+2;

  return ceil ($degat);
  }

  public function subirAttaque() {
          $this->degats += degat();

          //  les dégats superieur ou egal au point de vie => le personnage est tué
          if ($this->degats >= $this->point_vie) {
              return 'pokemon vaincu';
          }

          // Le personnage reçoit un coup
          return 'pokemon frappé';
      }
    /*  public function frapper(Personnage $perso)
 {
   if ($perso->id() == $this->id)
   {
     return "it's me";
   }
 }*/
 public function setId_attaque(){
   $this->id_attaque=$id_attaque;
 }
  public function setNom($nom){
    $this->nom= $nom;
  }

   public function setPuissance($puissance){
     $this->puissance = $puissance;
   }
   public function setPoint_vie(){
     $this->point_vie=$point_vie;
   }
   public function setIntensite(){
     $this->intensite=$intensite;

   }
   public function setDefense(){
     $this->defense=$defense;
   }
   public function setNiveau(){
     $this->niveau = $niveau;
   }
   public function getId_attaque(){
     return $this->id_attaque;
   }
   public function getName(){
     return $this->name;
   }
   public function getPuissance(){
     return $this->puissance;
   }
   public function getIntensite(){
     return $this->intensite;
   }
   public function getNiveau(){
     return $this->niveau;
   }
   public function getDefense(){
     return $this->defense;
   }
   public function getPoint_vie(){
     return $this->point_vie;
   }
 }

 ?>
