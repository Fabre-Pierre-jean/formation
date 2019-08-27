<?php
// connexion a la base de donnée ...........

  try{
    $base= new PDO('mysql:host=localhost;dbname=chat_tp;charset=utf8','root','Adrar1112!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }catch(Exception $e){
    die('erreur:').$e->getMessage();
  }




?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="uft-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>mon chtat</title>
  </head>
  <body>
    <div class="container border my-3 bg-light">
        <form class="form-inline d-flex justify-content-center" action=index.php method="post">
          <div class="form-grouprow mb-2">
            <input type="text" class="form-control shadow  mb-5 mt-3" name="name" size="10" placeholder="pseudo">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <textarea class="form-control shadow  mb-5 mt-3" name="message" rows="5" cols="33"></textarea>
          </div>
            <input type="submit" class="btn btn-primary shadow  mb-5 mt-3">
        </form>
    </div>

<?php
 // envois les donnees....
    $req = $base->prepare('INSERT INTO pseudo(nom,message) VALUES(?, ?)');
    var_dump(hello);
    $req->execute(array(htmlspecialchars($_POST['name']),htmlspecialchars($_POST['message'])));
 // rafraichir.....

?>
    <div class="container my-5">
    <table class="table text-center border rounded-bottom shadow p-3 mb-5">
      <tr>
        <th class="text-center bg-info border "><strong>pseudo :</strong></th>
        <th class="text-center bg-info border "><strong>message:</strong></th>
      </tr>


<?php
    // on recuperé les donnees .......
    $reponse = $base->query('SELECT nom, message FROM pseudo ORDER BY ID DESC LIMIT 0, 10');

    while ($donnees = $reponse->fetch()){    // on affiche la reponse .......

    	echo'<tr><td><p><strong>'.$donnees['nom'].'</strong></p></td><td><p>'.$donnees['message'].'</p></td><tr>';

    }

    $reponse->closeCursor(); //ferme la requete
?>
    </table>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
