<?php

require_once("vegetarian.php");
require_once("bird.php");
require_once("meateater.php");
require_once("tiger.php");
require_once("Zoo.php");

?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoo</title>
</head>
<body>
<div class="zoo">
<?php

$cheetah = new Vegetarian("cheetah","hurlement",3,"Chimpanzé");
$cheetahQuantity = $cheetah->getQuantity();
$cost = $cheetah->cost($cheetahQuantity);

echo "<p>" . $cheetah . "</p>" ;

$coco = new Vegetarian("coco","beuglement",5,"Autruche");
$cocoQuantity = $coco->getQuantity();
$cost = $coco->cost($cocoQuantity);

echo "<p>" . $coco . "</p>";

$robert = new Bird("robert","sifflement",1,"Aigle" , "envergure");
$robertQuantity = $robert->getQuantity();
$cost = $robert->cost($robertQuantity);

echo "<p>" . $robert . "</p>";

$orca = new meateater("orca","sifflement",70,"Orque");
$orcaQuantity = $orca->getQuantity();
$cost = $orca->cost($orcaQuantity);

echo "<p>" . $orca . "</p>";

$tigrou = new Tiger("tigrou","feulement",4,"Tigre du Bengale" ,10);
$tigrouQuantity = $tigrou->getQuantity();
$cost = $tigrou->cost($tigrouQuantity);

echo "<p>" . $tigrou . "</p>";


$blanco = new Tiger("blanche-Neige","feulement",4,"Tigre Blanc" ,24);
$blancoQuantity = $blanco->getQuantity();
$cost = $blanco->cost($blancoQuantity);

echo "<p>" . $blanco . "</p>";

$paradis= new Zoo("ZooNimaux",50);
$paradis->addAnimal($orca);
$paradis->addAnimal($cheetah);
$paradis->addAnimal($coco);
$paradis->addAnimal($robert);
$paradis->addAnimal($tigrou);
$paradis->addAnimal($blanco);


$paradis->delAnimal($tigrou);
echo "<p>" . $paradis . "</p>";

?>
</div>
</body>
</html>
