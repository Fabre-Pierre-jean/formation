<?php
/*FONCTIONS*/
/*Exo 1*/
/*$var=(boolean)true;

if($var!="true")
{
return true;
echo $var . "C'était donc vrai";
}
return false;
echo $var;*/

function vrai()
{
  return true;
}
echo "<br>";


/*Exo 2 - 3*/
$text="Salut salut";
$text2=" bah alors ? on fatigue ?";
function texttest($text , $text2)
{
return $text.$text2;
}
$salut=texttest($text, $text2);
echo $salut;
echo "<br>";

/*Exo 4*/
$num1=(int)9;
$num2=(int)15;
function comparaison($num1 , $num2)
{
  if($num1>$num2)
  {
   return "le premier nombre est plus grand";
  }
  elseif ($num1<$num2)
  {
    return "le premier nombre est plus petit";
  }
  elseif ($num1==$num2)
  {
    return "Les deux nombres sont identiques";
  }
}
$affichage=comparaison($num1 , $num2);
echo $affichage;
echo "<br>";

/*Exo 5*/
$text="Salut salut";
$num=40;
function renvoie($text , $num)
{
return $text.$num;
}
$salut=renvoie($text, $num);
echo $salut;
echo "<br>";

/*Exo 6*/


function renvoiep($nom , $prenom , $age)
{
return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";
}
$salut=renvoiep("CERMELLI", "Tom" , 23);
echo $salut;

?>
