<?php
try{
  $base= new PDO('mysql:host=localhost;dbname=pokekill;charset=utf8','root','Adrar1112!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}catch(Exception $e){
  die('erreur:').$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/choix.css">
    <title>choix</title>
  </head>
  <body>
    <div class="container">
      <h1>Pokemon disponible :</h1>
      <div>
    <table>
    <tr>
    <th><strong>name :</strong></th>
    <th><strong>health:</strong></th>
    <th><strong>strength:</strong></th>
    </tr>
<?php
    $reponse = $base->query('SELECT name,health,strength,image FROM pokemon where id_pokemon>=0 and id_pokemon<=12');
    while ($donnees = $reponse->fetch()){    // on affiche la reponse .......

    echo'<tr><td><p><strong>'.$donnees['name'].'</strong></p></td><td><p>'.$donnees['health'].'</p></td><td><p>'.$donnees['strength'].'</p></td><td><img style="width:50px; height=50px;" src='.$donnees['image'].'></td></tr>';

     }
     $reponse->closeCursor(); //ferme la requete
?>
    </table>
  </div>
      <div>
    <table>
    <tr>
    <th><strong>name :</strong></th>
    <th><strong>health:</strong></th>
    <th><strong>strength:</strong></th>
    </tr>
  <?php
    $reponse = $base->query('SELECT name,health,strength,image FROM pokemon where id_pokemon>=13 and id_pokemon<=24');
    while ($donnees = $reponse->fetch()){    // on affiche la reponse .......

    echo'<tr><td><p><strong>'.$donnees['name'].'</strong></p></td><td><p>'.$donnees['health'].'</p></td><td><p>'.$donnees['strength'].'</p></td><td><img style="width:50px; height=50px;" src='.$donnees['image'].'></td></tr>';

     }
     $reponse->closeCursor(); //ferme la requete
  ?>
    </table>
  </div>
  <div>
<table>
<tr>
<th><strong>name :</strong></th>
<th><strong>health:</strong></th>
<th><strong>strength:</strong></th>
</tr>
<?php
$reponse = $base->query('SELECT name,health,strength,image FROM pokemon where id_pokemon>=25');
while ($donnees = $reponse->fetch()){    // on affiche la reponse .......

echo'<tr><td><p><strong>'.$donnees['name'].'</strong></p></td><td><p>'.$donnees['health'].'</p></td><td><p>'.$donnees['strength'].'</p></td><td><img style="width:50px; height=50px;" src='.$donnees['image'].'></td></tr>';

 }
 $reponse->closeCursor(); //ferme la requete
?>
</table>
</div>
  </div>
  </body>
</html>
