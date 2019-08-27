<?php
/*CONDITIONS*/


/*ternaire*/
/*maVariable=1=2? true:false*/
/**/



/*Exo 1*/

$age=(int)23;
if($age>=(int)18)
{
echo "Vous êtes majeur";
}
else
{
echo "Vous êtes mineurs";
}

echo "<br>";

/*Exo 2*/
$IsEasy=(boolean)true;
if($IsEasy==(boolean)true)
{
echo "C'est facile!!";
}
else
{
echo "C'est difficile!!";
}

echo "<br>";

/*Exo 3*/

$age=(int)18;
$IsEasy=(boolean)false;
$genre;

if($IsEasy==(boolean)true)
{
$genre="Homme";
}
else
{
$genre="Femme";
}


if($age>=(int)18 && $genre==(boolean)true)
{
echo "Vous êtes un $genre majeur";
}
else
{
echo "Vous êtes un(e) $genre mineurs";
}

echo "<br>";

/*Exo 4*/
$i=(int)5;
switch ($i) {
    case 0:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 1:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 2:
      echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. ";
      break;
    case 3:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
";
        break;
    case 4:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes. ";
        break;
    case 5:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre. ";
        break;
    case 6:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. ";
        break;
    case 7:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 8:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
      default;
        break;
}

/*Exo 5*/
echo "<br>";

$maVariable="Homme";

if($maVariable!="Homme")
{
  echo "C'est une développeuse !!!";
}
else
{
  echo "C'est un développeur !!!";
}

/*Exo 6*/

echo "<br>";
$maVariable=(boolean)false;
if($maVariable==false)
{
echo "c'est pas bon";
}
else
{
echo "c'est bon";
}

?>
