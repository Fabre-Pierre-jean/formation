$liste = document.getElementById("liste");

function selectionne(e)
{
e.target.classList.toggle("selected");
}
$liste.onclick = selectionne;


$lis = liste.children;

function sup(e)
{
	for(i=0; i <= $lis.length ; i++)
	{
		if($lis[i].classList.contains("selected"))
		{
		$lis[i].classList.add("sup");
		}
	}
}

function aff(e)
{
	for(i=0 ; i <= $lis.length ; i++)
	{
		if($lis[i].classList.contains("sup"))
		{
		$lis[i].classList.remove("aff");
		$lis[i].classList.remove("sup");
		}
	}
}

