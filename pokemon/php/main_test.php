<?php
session_start();
require_once("Combat.php");

var_dump($_SESSION);

if(empty($_SESSION["username1"])){
    header('Location: pok_choice.php');
}
else{
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


if (isset($_SESSION["username1"]) && empty($_GET["username2"])) { // j'ai mis GET pour les tests donc remettre POST
    $username1 = $_SESSION["username1"];
    $idPrep1 = $bdd->prepare('SELECT id FROM users WHERE username= :username'); //il me faut l'id du user pour pouvoir l'insert dans table jointure avec le choix des pokemons
    $idPrep1->execute(array('username' => "$username1")); // j'ai mis GET pour les tests donc remettre POST
    $donnees1 = $idPrep1->fetch();  // $données contient l'id du user par $donnees["id"]
    $idPrep1->closeCursor();

    foreach ($_GET['pokemon1'] as $valeur) //permet de parcourir le tableau afin de requeter par pok_name
    {
        $idPokPrep1 = $bdd->prepare('SELECT pok_id FROM pokemon WHERE pok_name= :pok_name');//on retrouve l'id par rapport au pok_name recupéré de pok_choice        $idPokPrep->execute(array('pok_name'=>$valeur)); // j'ai mis GET pour les tests donc remettre POST
        $idPokPrep1->execute(array('pok_name' => $valeur));
        $result1 = $idPokPrep1->fetch();

        //On popule la table de jointure qui permet de lier l'user a ces pokemons
        $insertJoin1 = $bdd->prepare('INSERT INTO `join_users_pokemon`(`fk_id_user`, `fk_pok_id`) VALUES (:user_id, :pok_id)');
        $insertJoin1->execute(array('pok_id' => $result1["pok_id"], 'user_id' => $donnees1["id"]));
    }
    $idPokPrep1->closeCursor();


//il faut maintenant prendre l'id du user qui est $donnees
// puis aller chercher les id pokemon qui lui correspond puis chopper tous dans la table pokemon qui correspond a ces id
    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 0,1)');
    $user1->execute(array('id_user' => $donnees1["id"]));
    $pokemon1 = $user1->fetch();
    $user1->closeCursor();

    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 1,1)');
    $user1->execute(array('id_user' => $donnees1["id"]));
    $pokemon2 = $user1->fetch();
    $user1->closeCursor();

} elseif (isset($_GET["pokemon2"]) && isset($_SESSION["username2"])) { // j'ai mis GET pour les tests donc remettre POST
    echo "test";
    $username2 = $_SESSION["username2"];
    $idPrep2 = $bdd->prepare('SELECT id FROM users WHERE username= :username'); //il me faut l'id du user pour pouvoir l'insert dans table jointure avec le choix des pokemons
    $idPrep2->execute(array('username' => "$username2")); // j'ai mis GET pour les tests donc remettre POST
    $donnees2 = $idPrep2->fetch();  // $données contient l'id du user par $donnees["id"]
    $idPrep2->closeCursor();

    foreach ($_GET['pokemon2'] as $valeur) //permet de parcourir le tableau afin de requeter par pok_name
    {
        $idPokPrep2 = $bdd->prepare('SELECT pok_id FROM pokemon WHERE pok_name= :pok_name');//on retrouve l'id par rapport au pok_name recupéré de pok_choice        $idPokPrep->execute(array('pok_name'=>$valeur)); // j'ai mis GET pour les tests donc remettre POST
        $idPokPrep2->execute(array('pok_name' => $valeur));
        $result2 = $idPokPrep2->fetch();

        //On popule la table de jointure qui permet de lier l'user a ces pokemons
        $insertJoin2 = $bdd->prepare('INSERT INTO `join_users_pokemon`(`fk_id_user`, `fk_pok_id`) VALUES (:user_id, :pok_id)');
        $insertJoin2->execute(array('pok_id' => $result2["pok_id"], 'user_id' => $donnees2["id"]));
    }
    $idPokPrep2->closeCursor();

    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 0,1)');
    $user1->execute(array('id_user' => $donnees1["id"]));
    $pokemon1 = $user1->fetch();
    $user1->closeCursor();

    $user1 = $bdd->prepare('SELECT * FROM pokemon WHERE pok_id = (SELECT fk_pok_id FROM join_users_pokemon WHERE fk_id_user = :id_user LIMIT 1,1)');
    $user1->execute(array('id_user' => $donnees1["id"]));
    $pokemon2 = $user1->fetch();
    $user1->closeCursor();

//SELECT * FROM pokemon INNER JOIN join_users_pokemon  ON pok_id = fk_pok_id where fk_id_user=:id_user EXEMPLE A PRENDRE POUR LES ATTAQUES!!!!
//Combat de pokemon

    $pok1_team1 = new Combat($pokemon1["pok_name"], $pokemon1["pok_xp"], $pokemon1["vie_base"], $pokemon1["urlimage"]);
    $pok2_team1 = new Combat($pokemon2["pok_name"], $pokemon2["pok_xp"], $pokemon2["vie_base"], $pokemon2["urlimage"]);
    $pok1_team1->getLife();


//    $pok1_team2 = new Combat($pokemon3["pok_name"], $pokemon3["pok_xp"], $pokemon3["vie_base"], $pokemon3["urlimage"]);
//    $pok2_team2 = new Combat($pokemon4["pok_name"], $pokemon4["pok_xp"], $pokemon4["vie_base"], $pokemon4["urlimage"]);


//
//if (isset($_POST['attack1'])) {
//
//
////    $pikachu->hit($raichu);
////    $vie = $raichu->getVie();
////    $raichu->setVie($vie);
////    $pikachu->getVie();
////    $pikachu->winXp();
////    $pikachu->getXp();
//
//
//} elseif (isset($_POST['attack2'])) {
//
////    $raichu->hit($pikachu);
////    $raichu->getVie();
////    $pikachu->getVie();
////    $raichu->winXp();
////    $raichu->getXp();
}
}
?>
</body>
</html>

