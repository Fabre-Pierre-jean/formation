<?php
session_start();
//session_destroy();
var_dump($_SESSION);


try {
    $bdd = new PDO("mysql:host=localhost;dbname=pokemon_tp;charset=utf8", "pokemon", "pokpass");
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}



if(isset($_GET["username"]) && isset($_GET["password"])) {

    $req = $bdd->prepare('SELECT username, passwd FROM users WHERE username = :user AND passwd = :password ');
    $req->execute(array('user' => $_GET["username"], 'password' => $_GET["password"]));
    $donnee = $req->fetch();

    if ($_GET["username"] != $donnee["username"] && $_GET["password"] != $donnee["password"]) {
        header('Location:testUsers.php');
    }
    else {
            $_SESSION["username1"]  = $_GET["username"];//Passer en POST une fois login pret et fonctionnel!!!

        ?>

        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="../css/choix.css">
            <title>choix</title>
        </head>
        <body>

        <?php
        echo "<h1>Choisissez vos 2 pokemons</h1>";
        if (empty($_SESSION["username1"])){ //si il a pas de username en venant de testUsers.php je mets un GET pour les tests une fois fini le passer en POST

            echo "Veuillez vous inscrire afin de pouvoir jouer";
        }
        elseif(isset($_SESSION["username1"])){ //si il a un username
        ?>
        <form action="testUsers2.php" method="get"> <!--changer la method en POST!!!!!-->
            <div class="container">
                <div>
                    <table>
                        <?php
                        $reponse =$bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 1 OR pok_id = 4 OR pok_id = 7) ');
                        while ($donnee = $reponse->fetch()){    // on affiche la reponse .......

                            echo'<tr><td><input type=checkbox name="pokemon1[]" value="' . $donnee["pok_name"] . '"/></td>';
                            echo '<td><p>' . strtolower($donnee["pok_name"]) . '</p></td>';
                            echo '<td><img  src='. $donnee["urlimage"] .'></td></tr>';

                        }
                        $reponse->closeCursor(); //ferme la requete
                        ?>
                    </table>
                </div>
                <div>

                    <table>
                        <?php
                        $reponse = $bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 10 OR pok_id = 13 OR pok_id = 16)');
                        while ($donnee = $reponse->fetch()){    // on affiche la reponse .......

                            echo'<tr><td><input type=checkbox name="pokemon1[]" value="' . $donnee["pok_name"] . '"/></td><td><p>' . strtolower($donnee["pok_name"]) . '</p></td><td><img  src='. $donnee["urlimage"] .'></td></tr>';

                        }
                        $reponse->closeCursor(); //ferme la requete
                        ?>
                    </table>
                </div>
                <div>
                    <table>
                        <?php
                        $reponse = $bdd->query('SELECT pok_name, urlimage FROM pokemon WHERE vie_base = 100 AND (pok_id = 19 OR pok_id = 21)');
                        while ($donnee = $reponse->fetch()){    // on affiche la reponse .......

                            echo'<tr><td><input type=checkbox name="pokemon1[]" value="' . $donnee["pok_name"] . '"/></td><td><p>' . strtolower($donnee["pok_name"]) . '</p></td><td><img  src='. $donnee["urlimage"] .'></td></tr>';

                        }
                        $reponse->closeCursor(); //ferme la requete
                        ?>
                    </table>
                </div>
                <input type="submit" value="Envoyer" />
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
<?php
}
}
?>