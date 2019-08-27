<?php
session_start();

$_SESSION["pokemon2"] = $_GET["pokemon2"];
var_dump($_SESSION);
require_once("Combat.php");
try {
    $bdd = new PDO("mysql:host=localhost;dbname=pokemon_tp;charset=utf8", "pokemon", "pokpass");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="main.php" method="post">
    <input type="submit" value="attaquer" name="attack1">
</form>
<form action="main.php" method="post">
    <input type="submit" value="attaquer" name="attack2">
</form>

<?php

if(isset($_SESSION["pokemon1"]) && isset($_SESSION["username1"]) && (isset($_SESSION["pokemon2"]) && isset($_SESSION["username2"]))) { // j'ai mis GET pour les tests donc remettre POST
    $username1 = $_SESSION["username1"];
    $idPrep = $bdd->prepare('SELECT id FROM users WHERE username= :username'); //il me faut l'id du user pour pouvoir l'insert dans table jointure avec le choix des pokemons
    $idPrep->execute(array('username' => "$username1")); // j'ai mis GET pour les tests donc remettre POST
    $donnees = $idPrep->fetch();  // $données contient l'id du user par $donnees["id"]
    $idPrep->closeCursor();

    foreach ($_SESSION['pokemon1'] as $valeur) //permet de parcourir le tableau afin de requeter par pok_name
    {
        $idPokPrep = $bdd->prepare('SELECT pok_id FROM pokemon WHERE pok_name= :pok_name');//on retrouve l'id par rapport au pok_name recupéré de pok_choice        $idPokPrep->execute(array('pok_name'=>$valeur)); // j'ai mis GET pour les tests donc remettre POST
        $idPokPrep->execute(array('pok_name' => $valeur));
        $result = $idPokPrep->fetch();

        //On popule la table de jointure qui permet de lier l'user a ces pokemons
        $insertJoin = $bdd->prepare('INSERT INTO `join_users_pokemon`(`fk_id_user`, `fk_pok_id`) VALUES (:user_id, :pok_id)');
        $insertJoin->execute(array('pok_id' => $result["pok_id"], 'user_id' => $donnees["id"]));
    }
    $idPokPrep->closeCursor();


    $username2 = $_SESSION["username2"];
    $idPrep2 = $bdd->prepare('SELECT id FROM users WHERE username= :username'); //il me faut l'id du user pour pouvoir l'insert dans table jointure avec le choix des pokemons
    $idPrep2->execute(array('username' => "$username2")); // j'ai mis GET pour les tests donc remettre POST
    $donnees2 = $idPrep2->fetch();  // $données contient l'id du user par $donnees["id"]
    $idPrep2->closeCursor();

    foreach ($_SESSION['pokemon2'] as $valeur) //permet de parcourir le tableau afin de requeter par pok_name
    {
        $idPokPrep2 = $bdd->prepare('SELECT pok_id FROM pokemon WHERE pok_name= :pok_name');//on retrouve l'id par rapport au pok_name recupéré de pok_choice        $idPokPrep->execute(array('pok_name'=>$valeur)); // j'ai mis GET pour les tests donc remettre POST
        $idPokPrep2->execute(array('pok_name' => $valeur));
        $result2 = $idPokPrep2->fetch();

        //On popule la table de jointure qui permet de lier l'user a ces pokemons
        $insertJoin2 = $bdd->prepare('INSERT INTO `join_users_pokemon`(`fk_id_user`, `fk_pok_id`) VALUES (:user_id, :pok_id)');
        $insertJoin2->execute(array('pok_id' => $result2["pok_id"], 'user_id' => $donnees2["id"]));
    }
    $idPokPrep2->closeCursor();

//il faut maintenant prendre l'id du user qui est $donnees
// puis aller chercher les id pokemon qui lui correspond puis chopper tous dans la table pokemon qui correspond a ces id
    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 0,1)');
    $user1->execute(array('id_user' => $donnees["id"]));
    $pokemon1 = $user1->fetch();
    $user1->closeCursor();

    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 1,1)');
    $user1->execute(array('id_user' => $donnees["id"]));
    $pokemon11 = $user1->fetch();
    $user1->closeCursor();

    $user2 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 0,1)');
    $user2->execute(array('id_user' => $donnees2["id"]));
    $pokemon2 = $user2->fetch();
    $user2->closeCursor();

    $user2 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 1,1)');
    $user2->execute(array('id_user' => $donnees2["id"]));
    $pokemon22 = $user2->fetch();
    $user2->closeCursor();

//SELECT * FROM pokemon INNER JOIN join_users_pokemon  ON pok_id = fk_pok_id where fk_id_user=:id_user EXEMPLE A PRENDRE POUR LES ATTAQUES!!!!
//Combat de pokemon
    echo "<h1>TEAM 1</h1>";

    $pok1_team1 = new Combat($pokemon1["pok_name"], $pokemon1["pok_xp"], $pokemon1["vie_base"], $pokemon1["urlimage"]);
    $pok2_team1 = new Combat($pokemon11["pok_name"], $pokemon11["pok_xp"], $pokemon11["vie_base"], $pokemon11["urlimage"]);

    $pok1_team1->getImage();
    $pok1_team1->getLife();
    $pok2_team1->getImage();
    $pok2_team1->getLife();

    echo "<h1>TEAM 2</h1>";

    $pok1_team2 = new Combat($pokemon2["pok_name"], $pokemon2["pok_xp"], $pokemon2["vie_base"], $pokemon2["urlimage"]);
    $pok2_team2 = new Combat($pokemon22["pok_name"], $pokemon22["pok_xp"], $pokemon22["vie_base"], $pokemon22["urlimage"]);

    $pok1_team2->getImage();
    $pok1_team2->getLife();
    $pok2_team2->getImage();
    $pok2_team2->getLife();

//
//if (isset($_POST['attack1'])) {
//    $pikachu->hit($raichu);
//    $vie = $raichu->getVie();
//    $raichu->setVie($vie);
//    $pikachu->getVie();
//    $pikachu->winXp();
//    $pikachu->getXp();
//
//
//    } elseif (isset($_POST['attack2'])) {
//
//    $raichu->hit($pikachu);
//    $raichu->getVie();
//    $pikachu->getVie();
//    $raichu->winXp();
//    $raichu->getXp();
//    }
}
?>
</body>
</html>

