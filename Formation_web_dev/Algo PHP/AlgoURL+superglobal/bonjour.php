<?php
/*http://www.lephpfacile.com/cours/18-les-sessions*/
/*isset check si la valeur qu'on a mis dedans est récup*/

  /*echo  $_GET["name"] . "<br>";
  echo  $_GET["lastname"] . "<br>";
  echo  $_GET["age"] . "<br>";*/

  /*echo $_SERVER['HTTP_USER_AGENT'];
  echo $_SERVER['SERVER_ADDR'] . "<br>"; /*SERVER = REMOTE*/
  /* echo $_SERVER['SERVER_NAME'] . "<br>";*/



// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
/*$login_valide = "Tom";
$pwd_valide = "coucou";*/

// on teste si nos variables sont définies
/*if (isset($_POST['login']) && isset($_POST['pwd']))
{

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd'])
  {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

	}
	else
  {
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}*/


setcookie("login", $_POST["login"], time() + 365*24*3600, null, null, false, true); // On écrit un cookie
setcookie("pwd", $_POST["pwd"], time() + 365*24*3600, null, null, false, true);

if(isset($_COOKIE['login']) && isset($_COOKIE['pwd']))
{
  // Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
  echo "Votre login est " . $_POST['login'] . " et votre mot de passe est " . $_POST['pwd'];
}
else
{
echo "Votre login ou votre password est incorrecte";
}

?>
