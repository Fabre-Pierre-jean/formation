<?php
require_once('attaque.php');
require_once('mybattle.php');


if (isset($pokemonline['nom'])){
//enregistrer les attributs de la bataille en cours dans un tableau qu'on gardera dans le fichier text
//$battle_settings=[];
//$newvalue = implode(" ", $battle_settings);
//fseek($currentBattle, 0);
//puts($currentBattle, $newvalue);
}
$combat = new Battle($pokemonline['nom'], intval($degatpok1),$pokemonline['point_vie'],$pokemonline['experience'], $poklineopp['nom'], $degatpok2,$poklineopp['point_vie'],$poklineopp['experience']);

//on entame le traitement des attaques postées
$i=0;
if(isset($_POST['attackbutton'])){

  while($_POST['attackbutton']!== $attacks[$i]){
        $i++;
  }
  $attackpok1= new Attaque($intensite[$i], $poklineopp['defense'], $pokemonline['experience'], $pokemonline['niveau']);

  $suddenDamagepok2=$attackpok1->degat();
  $combat->recevoirdegat2($suddenDamagepok2);
  //choisir une attaque au hazard

      $pokoppattack = array(0, 1, 2,3);
      $rand_keysAttack = array_rand($pokoppattack, 1);
      $id_attackopp=$pokoppattack[$rand_keysAttack];
      $attackpok2= new Attaque($intensiteOpp[$i], $pokemonline['defense'], $poklineopp['experience'], $poklineopp['niveau']);
      $suddenDamagepok1=$attackpok2->degat();
      $combat->recevoirdegat1($suddenDamagepok1);


  //on appelle la method recevoirdegat2 dans $combat->recevoirdegat2($suddendamagepok2);
  //if(($degatpok1<$pokemonline['point_vie']) AND ($degatpok2<$poklineopp['point_vie'])){
          $degatpok1=$degatpok1+$suddenDamagepok1;
          $degatpok2=$degatpok2+$suddenDamagepok2;
          $damage_tabPost=array($degatpok1,$degatpok2);
          $currentBattle = fopen('degatcombat.txt', 'r+');
          $stringPost = implode(" ", $damage_tabPost);
          ftruncate($currentBattle, 0);
          fputs($currentBattle, $stringPost);
          fclose($currentBattle);
//}else{
      //echo "combat terminé";
//}
}
echo '$degatpok1 '.$combat->getDegatpok1().'<br>';
echo '$degatpok2 '.$combat->getDegatpok2() .'<br>';

 ?>
