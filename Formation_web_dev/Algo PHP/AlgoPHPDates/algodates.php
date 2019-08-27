<?php
/*Exo 1 - 2*/
date_default_timezone_set('Europe/Berlin');

echo date('d/m/Y') . "<br>"; /*27/06/2019*/
echo date('d-m-Y') . "<br>"; /*27-06-2019*/
echo date('l j F Y') . "<br>"; /*Thursday 27 June 2019*/
/*l=jour en anglais*/
/*j=jour(chiffre)*/
/*F=mois en anglais*/
/*Y=année*/

/*Exo 3*/
setlocale(LC_ALL, "Fr");
echo strftime("%A %e %B %Y") . "<br>";

/*Exo 4*/

echo time() . "<br>";
echo mktime(15, 0, 0, 8, 2, 2016) . "<br>";
/*mktime(hour, minute, second, month, day, year)*/

/*Exo 5*/

$now  = time();

$date2= mktime(15, 0, 0, 8, 2, 2016);
$diff = abs( ($now - $date2)/(3600*24) );
echo $diff." jours";
/*abs renvoie nombre absolue donc pas de ','*/
?>
