$carousel=document.getElementById("carousel");
$suivant=document.getElementById("suivant");
$lis = carousel.children;
$position=0;

function suivant()
{
	for($i = 0; $i <= $lis.length-1; $i++)
	{
		if($lis[$i]!=$i)
		{
			$lis[$i].style.opacity= 0.0;
		}
	}
	if($i==$lis.length)
	{
		console.log("salut salut");
		$i=0;
	}
}
$suivant.onclick = suivant;
/**/



$carousel = document.getElementById("carousel");
$suivant = document.getElementById("suivant");
$lis = carousel.children;
$pos = 2;

function suivant() {
  for ($i = 0; $i < $lis.length; $i++) 
  {
    $lis[$i].style.display = "none";

    if ($i + 1 == $pos) 
    {
      $lis[$i].style.display = "block";
    }
  }
  $pos = $pos + 1;
  if ($pos > 4)
  {
	$pos = 1;
  } 
}

function suivant() {
  for ($i = 0; $i < $lis.length; $i++) 
  {
    $lis[$i].style.display = "none";

    if ($i + 1 !== $pos) 
    {
      $lis[$i].style.display = "block";
    }
  }
 $pos = $pos - 1;
  if ($pos < 1)
  {
	$pos = 4;
  }
}