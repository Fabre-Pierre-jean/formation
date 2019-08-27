<?php
//session_start();
//var_dump($_SESSION);
if(empty($_GET["username"]) && (empty($_GET["password"])) ) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <title>Pokemon, le jeu !- Page de Connexion</title>
    </head>
    <body>
    <div class="container">
    <div class="container-header"> <!--Conteneur des titres-->
        <div id="header-title"> <!--titre principal-->
            <h1>Pokemon Battle</h1>
        </div>

    </div>
    <!-- Debut de la zone de connexion -->
    <div id="container">
        <form action="pok_choice.php" method="get">
            <h3>Connexion</h3>
            <label><b>Nom d'utilisateur</b></label><input type="text" placeholder="Entrer le nom d'utilisateur"
                                                          name="username" required>
            <label><b>Mot de passe</b></label><input type="password" placeholder="Entrer le mot de passe"
                                                     name="password" required>
            <input type="submit" id='submit' value='LOGIN'>
        </form>
    </div>
    </div>

    </body>
    </html>

    <?php
}
?>
