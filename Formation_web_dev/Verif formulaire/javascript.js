function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "red";
   else
      champ.style.backgroundColor = "green";
}


function verifpseudo(champ)
{
   if((champ.value.length < 1 || champ.value.length > 10))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifmail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}


function envoieformulaire(f)
{
	var pseudoOk= verifpseudo(f.pseudo);
	var mailOK= verifmail(f.mail)
	if (pseudoOk && mailOK)
	{
		alert("Valide")
		return true;
		
	}
	else
	{
		alert("entrer des champs valides");
		return false;
		
	}
}

