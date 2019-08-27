<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--<link rel="stylesheet" type="text/css" href="index.css">-->
        <title>Pokemon, le jeu !- Page de Connexion</title>
    </head>
 <body>

  	<div class="container-header"> <!--Conteneur des titres-->
    	<div id="header-title"> <!--titre principal-->
        <h1>Pokemon Battle</h1>
    	</div>
    	<div class="container-hero"> <!--corps du hero-->
        <img src="homepage.gif" alt="moving pokeball">
    	</div>
  	</div>
<!-- Debut de la zone de connexion -->
		<div id="container">
      <form action="testUsers.php" method="POST">
        <h3>Connexion</h3>
        <label><b>Nom d'utilisateur</b></label><input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <label><b>Mot de passe</b></label><input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <input type="submit" id='submit' value='LOGIN' >
      </form>
		</div>

	</body>
</html>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokemon_tp;charset=utf8', 'pokemon', 'pokpass');
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
        die('Erreur : '.$e->getMessage());
}

// Requete pour accèder au compte joueur
if($_POST["username"] !== "")
{
    $user = $_POST['username'];
    $passwd = $_POST['password'];

  	try
  	{
  		$req = $bdd -> prepare('SELECT username, passwd FROM users WHERE :username IS NOT NULL AND :passwd IS NOT NULL');
  		$response = $req->execute(array(':username'=>$user,':passwd'=>$passwd));
  	}
  	catch(Exception $e)
  	{
  	       die('Erreur : '.$e->getMessage());
  	}

    $bool = false;
    foreach($req->fetch() as $donnee) {
      if (array_key_exists($user,$req))
      {
        // confirmation de la connexion a la bdd
        echo "Bonjour". $user.", vous êtes connecté";
        $bool = true;
        //redirection page choix pokemon
				header('Location: pok_choice.php');
      }
    }

    if (!$bool)
    {
                  try
                  {
                  	$req = $bdd -> prepare("INSERT INTO users(username,passwd) VALUES (?,?)");
                  	$response = $req->execute(array($user, $passwd));
                	}

                	catch(Exception $e)
                	{
                          die('Erreur : '.$e->getMessage());
                  }
                  var_dump($response);

            echo "Votre compte a bien été créé.";
        }
}

?>
