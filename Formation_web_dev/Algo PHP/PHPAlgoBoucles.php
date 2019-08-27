<?php
/*BOUCLES*/
/*Exo 1*/
$var=(int)0;

while ($var<=10)
{
echo $var;
$var++;
}

echo "<br>";
/*Exo 2*/
$var1=(int)0;
$var2=(int)5;

while ($var1<20)
{
$var1=$var1*$var2;
echo $var1;
$var1++;
}

echo "<br>";

/*Exo 3*/
$var1=(int)100;
$var2=(int)1;

while($var1>10)
{
$var1=$var1*$var2;
echo $var1;
echo "<br>";
$var1--;
}


/*Exo 4*/
$var=(int)1;

while ($var<=10)
{
  echo $var;
  $var++;
}

echo "<br>";


/*Exo 5*/
$var=(int)1;
while ($var<=15)
{
  echo "On y arrive presque " . $var;
  $var++;
}

echo "<br>";
/*Exo 6*/
$var=(int)20;
while ($var>=0)
{
  echo "C'est presque bon " . $var ;
  $var--;
}
?>
