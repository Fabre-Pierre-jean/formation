
$carousel = document.getElementById("carousel");
$suivant = document.getElementById("suivant");
$lis = carousel.children;
$pos = 2;

function suivant() {
  for ($i = 0; $i < $lis.length; $i++) {
    $lis[$i].style.display = "none";

    if ($i + 1 == $pos) {
      $lis[$i].style.display = "block";
    }
  }
  $pos = $pos + 1;
  if ($pos > 4) $pos = 1;
}

function precedant() {
  for ($i = 0; $i < $lis.length; $i++) 
  {
    $lis[$i].style.display = "none";

    if ($i + 1 == $pos) 
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
