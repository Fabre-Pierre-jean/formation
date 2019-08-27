<?php
require('Personnage.php');

$stylo = new Personnage('Steve', 'Avignon');
$bouteille = new Personnage('Sacha', 'Montpellier');
$stylo->gainXp('2');
$bouteille->gainXp('3');
$bottle = new Personnage('Hello', 'Tombouctou');

$stylo =   $stylo->setNom('Austin');