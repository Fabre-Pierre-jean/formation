<?php
require_once("Pokemon2.php");
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


if(isset($_GET["pokemon"]) && isset($_GET["username"])) { // j'ai mis GET pour les tests donc remettre POST

    $idPrep = $bdd->prepare('SELECT id FROM users WHERE username= :username'); //il me faut l'id du user pour pouvoir l'insert dans table jointure avec le choix des pokemons
    $idPrep->execute(array('username' => $_GET["username"])); // j'ai mis GET pour les tests donc remettre POST
    $donnees = $idPrep->fetch();  // $données contient l'id du user

    $idPrep->closeCursor();


    foreach ($_GET['pokemon'] as $valeur) //permet de parcourir le tableau afin de requeter par pok_name
    {
        $idPokPrep = $bdd->prepare('SELECT pok_id FROM pokemon WHERE pok_name= :pok_name');//on retrouve l'id par rapport au pok_name recupéré de pok_choice        $idPokPrep->execute(array('pok_name'=>$valeur)); // j'ai mis GET pour les tests donc remettre POST
        $result = $idPokPrep->fetch();

        //On popule la table de jointure qui permet de lier l'user a ces pokemons
        $insertJoin = $bdd->prepare('INSERT INTO `join_users_pokemon`(`fk_id_user`, `fk_pok_id`) VALUES (:user_id, :pok_id)');
        $insertJoin->execute(array('pok_id' => $result["pok_id"], 'user_id' => $donnees["id"]));
    }
    $idPokPrep->closeCursor();

}


//Combat de pokemon
//$pikachu = new Pokemon("Pikachu", 100, 2, 0);
//$raichu = new Pokemon("Raichu", 100, 2, 0);
//
//
//if (isset($_POST['attack1'])) {
//
//
//    $pikachu->hit($raichu);
//    $vie = $raichu->getVie();
//    $raichu->setVie($vie);
//    $pikachu->getVie();
//    $pikachu->winXp();
//    $pikachu->getXp();
//
//
//} elseif (isset($_POST['attack2'])) {
//
//    $raichu->hit($pikachu);
//    $raichu->getVie();
//    $pikachu->getVie();
//    $raichu->winXp();
//    $raichu->getXp();
//}

?>
</body>
</html>

