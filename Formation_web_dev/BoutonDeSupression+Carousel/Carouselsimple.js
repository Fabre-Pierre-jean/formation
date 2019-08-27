
$carousel=document.getElementById('carousel');
$suivant=document.getElementById('suivant');
$c = document.getElementById("carousel").children;
$cmax = (document.getElementById("carousel").children.length)-1;
$position = 0;
$carousel.style.borderColor='#f00';
		
	function suivant()
	{
		
		if ($position < $cmax)
		{
		 	$c[$position].style.display="none";
			$position++;
		}
		else
		{
		 	$position=0;
		 	for (i=0; i < $cmax ;i++)
		 	{
		 		$c[i].style.display=null;
		 	}
		 }
	}

	 function pre()
	{
		/*
			1er tour de boucle : position = 0; du coup va dans else, et applique sur toutes les cases le display none.
		*/
		if($position > 0)
		{
			/* 2e tour : rentre dans if, annule le none sur la case du tableau qui correspond */
			$c[$position-1].style.display=null;
			$position--;
		}
		else
		{

			$position=3;
			for (i=$position-1; i >= 0 ; i--)
			{
				$c[i].style.display="none";
			}
		}
	}