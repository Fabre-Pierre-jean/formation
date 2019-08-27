<?php

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
    <title>Choix des pokemons</title>
</head>
<body>

<?php
echo "<h1>Choisissez vos 2 pokemons</h1>";
if (empty($_GET["username"])){ //si il a pas de username en venant de testUsers.php je mets un GET pour les tests une fois fini le passer en POST

    echo "Veuillez vous inscrire afin de pouvoir jouer";
}
elseif(isset($_GET["username"])){ //si il a un username
?>
<div class="container">
    <form action="main.php" method="get"> <!--changer la method en POST!!!!!-->

    <div>
        <table>

<?php
$reponse = $bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 1 OR pok_id = 4 OR pok_id = 7) ' );
    while ($donnee = $reponse->fetch()) {
        echo '<tr><td><img alt="pokemon" src=' . $donnee["urlimage"] . '></td><td><p><input type=checkbox name="pokemon[]" value="' . $donnee["pok_name"] . '"/></p></td><td><p>' . strtolower($donnee["pok_name"]) . '</p></td></tr>';
    }
    $reponse->closeCursor();
?>

        </table>
    </div>
<div>
    <table>

<?php
$reponse = $bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 10 OR pok_id = 13 OR pok_id = 16)' );
    while ($donnee = $reponse->fetch()) {
        echo '<tr><td><img alt="pokemon" src=' . $donnee["urlimage"] . '></td><td><p><input type=checkbox name="pokemon[]" value="' . $donnee["pok_name"] . '"/></p></td><td><p>' . strtolower($donnee["pok_name"]) . '</p></td></tr>';
    }
    $reponse->closeCursor();
?>
    </table>
</div>
<div>
    <table>

<?php

$reponse = $bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 19 OR pok_id = 21)' );
    while ($donnee = $reponse->fetch()) {
        echo '<tr><td><img alt="pokemon" src=' . $donnee["urlimage"] . '></td><td><p><input type=checkbox name="pokemon[]" value="' . $donnee["pok_name"] . '"/></p></td><td><p>' . strtolower($donnee["pok_name"]) . '</p></td></tr>';
    }
    $reponse->closeCursor();

?>
    </table>
    <input type="submit" value="Envoyer" />
    </form>
</div>


<?php
}
?>





<!--jQuery to dont let user choice more than 2 pokemon-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script>
    $('input[type=checkbox]').on('change', function (e) {
        if ($('input[type=checkbox]:checked').length > 2) {
            $(this).prop('checked', false);
            alert("You can only chose 2 pokemon bro!!!");
        }
    });
</script>

</body>
</html>