<?php
/*TABLEAUX*/
/*Exo 1*/

$mois=["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

/*Exo 2 - 3 - 4*/

function tabmois($mois)
{
  $mois[7]="août";
  return $mois[2].$mois[4].$mois[7];
}
$salut=tabmois($mois);
echo $salut;
echo "<br>";

/*Exo 5 - 6 - */

$nourriture= array(
"Rouge"=>"Pommes",
"Jaune"=>"Banane",
"Verte"=>"Poire",
"Marron"=>"Noix de coco",
"Verdatre"=>"Kiwi",
);
function coucou($nourriture)
{
  return $nourriture["Rouge"];
}
$plop=coucou($nourriture);
echo $plop;
echo "<br>";


/*Exo 8*/

$mois=["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
$max=sizeof($mois);
for($i=0; $i<$max ; $i++)
{
  echo " ".$mois[$i];
}
echo "<br>";
/*Exo 9 - 10*/
$nourriture= array(
"Rouge"=>"Pommes",
"Jaune"=>"Banane",
"Verte"=>"Poire",
"Marron"=>"Noix de coco",
"Verdatre"=>"Kiwi",
);
   foreach($nourriture as $key=>$value)
   {
   echo $key . " " . $value . " ";
   }
?>
