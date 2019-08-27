3.1

$nombre = prompt("écrire un nombre");
if (parseInt($nombre)>0)
{
	alert("positif")
}
else
{
	alert ("negatif")
}


3.2
$nombre1 = prompt("entrer nombre1")
$nombre1v = parseInt($nombre1)
$nombre2 = prompt("entrer nombre2")
$nombre2v = parseInt($nombre2)
if (($nombre1v>0 && $nombre2v>0) || ($nombre1v<0 && $nombre2v<0))
{
	alert("positif");
}
else
{
	alert("négatif");
}



3.3

$nom=prompt("entrer un nom")
$nom2=prompt("entrer un nom2")
$nom3=prompt("entrer un nom3")
if ($nom<$nom2) && ($nom2<$nom3)
{
	alert("Rangé dans l'ordre alphabétique")
}



3.4
$nombre1 = prompt("entrer nombre1")
$nombre1v = parseInt($nombre1)
$nombre2 = prompt("entrer nombre2")
$nombre2v = parseInt($nombre2)
$produit = $nombre2v*$nombre1v;
if (($nombre1v>0 && $nombre2v>0) || ($nombre1v<0 && $nombre2v<0))
{
	alert("positif");
}
else if ($produit==0)
{
	alert("Nul");
}
else
{
	alert("négatif")
}



3.5
$age =prompt("entrer age");
$agep= parseInt($age);
if ($agep>12)
{
	alert("Cadet");
}

else if ($agep>=10)
{
	alert("Minime");
}
else if ($agep>=8)
{
	alert("Pupille")
}
else if ($agep>=6)
{
	alert("Poussin")
}
else 
{
	alert("Trop jeune")
}






4.2
$h=prompt("entrer heure")
$m=prompt("entrer minute")
$m= parseInt($m)+1
$s=prompt("entrer seconde")
$s=parseInt($s)+1
if (parseInt($m)>=60)
{
	$m=0;
	$h=parseInt($h) +1;
}
else if (parseInt($h)>=24)
{
	$h=0
}

alert("Dans une minute il sera "+$h+"heure(s) et  "+$m+" minute(s).")





4.3



4.4
$nombre=prompt("nombre article");
$10=(parseInt($nombre))*0.10
$09=(parseInt($nombre))*0.09
$08=(parseInt($nombre))*0.08

if (parseInt($nombre)<=10)
{
	alert("le total sera de " +$10"euros")
}


else if ((parseInt($nombre)>=11) &&(parseInt($nombre)<=30))
{
	alert("le total sera de " +$09"euros")
}

else if (parseInt($nombre)>=31)
{
	alert("le total sera de " +$08"euros")
}


4.5
$sex=prompt("Entrer sex")
$age=prompt("Entrer age")
$age=parseInt($age)

if(($sex="M" && $age>20) || (($sex="F") && ($age>18 && $age<35)))
{
	alert("Imposable")
}
else
{
	alert("Non imposable")
}





4.6
$a=prompt("résultat candidat A")
$b=prompt("résultat candidat B")
$c=prompt("résultat candidat C")
$d=prompt("résultat candidat D")

if ($a>50)
{
	alert("Elu au premier tour")
}

else if (($b>50 || $c>50 || $d>50) || ($a>=12.5))
{
	alert("Battu, éliminé, sorti !!!")
}
else if ($a>=$b && $a>=$c && $a>=$d)
{
	alert("Ballotage favorable")
}
else
{
	alert("Ballotage défavorable")
}




5.1
$nombre=prompt("entrer nombre")
$nombre=parseInt($nombre)
while (($nombre<1) || ($nombre>3))
{
   $nombre =  parseInt(prompt("Recommencé"));
}
alert("bon resultat")



5.2
$nombre=prompt("entrer nombre")
$nombre=parseInt($nombre)
while (($nombre<10) || ($nombre>20))
{
	if ($nombre<10)
	{
		$nombre=parseInt(prompt("Plus grand"));
	}

	else if ($nombre>20)
	{
		$nombre=parseInt(prompt("Plus petit"));
	}
}




5.3
$nb =prompt("Entrer un nombre")
$stop =parseInt($nb)+10

for(i=$nb; i<$stop; i++)
{
	alert(+$nb)
}


5.5
$nombre =prompt("Entrer un nombre");
$nombre = parseInt($nombre);

for($i=1; $i<=10; $i++)
{
	alert($nombre*$i)
}



5.6
$nb=prompt("Entrer un nombre")
$som=0
for($i=1; $i<=$nb; $i++)
{
	$som=$som+$i
alert("La somme est :"+$som)
}



6.1
$tab=[6]
for (i=0; i<6; i++)
{
	$tab[i]=0
  alert ($tab[i]);
}



6.2
$tab=[5];
$tab[0]="a"
$tab[1]="e"
$tab[2]="i"
$tab[3]="o"
$tab[4]="u"
$tab[5]="y"

alert($tab)


6.3
$tab=[8];
for($i=0; $i<9; $i++)

prompt("Entrer la note",$i+1);
alert ($tab[$i]);


6.4

$nb=prompt("entrer nombre");
$nombrepos=0
$nombreneg=0
$tab=[]

for($i=0; $i<$nb-1; $i++)
{
	prompt("Entrer le nombre n°", $i+1)
	if ($tab[$i]>0)
	{
		$nombrepos=$nombrepos+1;
	}
	else
	{
		$nombreneg=$nombreneg+1;
	}

}
alert("Nombre de valeurs positif :",$nombrepos)
alert("Nombre de valeur négatives :", $nombreneg)



7.1
$tab=[]


for ($i=0; $i<6; $i++)
{
	$tab[$i]=$tab[]
	for($j=0; $j<13; $j++)
	{
	$tab[$i][$j]=0;
		console.log($tab[$i][$j])

	}
}



7.2




$max=0
for(i=0; i<6; i++)
{

	if ($tab[i]>$max)
	{
  		$tab[i]=$max
	}
}



7,8,4,10
function trie()
for ($i=0; $i<5, $i++)
{
	if ($trie[$i]<$trie[$i++]) 
	{
		a=3
		b=5
		c=a

		c=a /*3*/

		a=b /*5*/
		b=c /*3*/

	}
	else
	{

	}
	$i=0
}

function getmaxtableau()
