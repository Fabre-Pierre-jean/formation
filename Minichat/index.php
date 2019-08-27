<?php
if (isset($_POST["pseudo"]))
{
  $pseudo=htmlspecialchars($_POST["pseudo"]);
}
else
{
  $pseudo="";
}
if (isset($_POST["message"]))
{
  $message=htmlspecialchars($_POST["message"]);
}
else
{
  $message="";
}
?>
<Doctype!>
<html>
<head>
<link href="index.css" rel="stylesheet">
<link rel='stylesheet' type='text/css' href='css/style.php' />
</head>


<body>

  <form action="index.php"  method="post">
    <p id="pseudo">Pseudo :<input type="text" name="pseudo" required></p>
    <p id="message">Message :<input type="text" name="message"></p>
    <input type="reset" nale="nom" value=" Réinitialiser ">
    <input type="submit" Value="Envoyer" >
  </form>
<div class="formcontainer">
  <?php
  try
  {
    $bdd= new PDO("mysql:host=localhost;dbname=Minichat;charset=utf8", "root", "ADRAR1112");
  }
  catch(Exception $e)
  {
      die("Erreur : " . $e->getMessage());
  }
  $send= $bdd->prepare("INSERT INTO utilisateur(user_name,user_text) Values(:pseudo, :message)");

  if(isset($_POST["pseudo"]) && isset($_POST["message"]))
  {
    $reponse=$send->execute(array("pseudo"=> htmlspecialchars($_POST["pseudo"]), "message" => htmlspecialchars($_POST["message"])));
  }


  $reprequest=$bdd->query("SELECT user_name,user_text  FROM utilisateur ORDER  BY id DESC LIMIT 10 ");
  while($donnee=$reprequest->fetch())
  {
    echo "<strong>".$donnee['user_name']."</strong>" . " :" .$donnee['user_text']. '<br/>';
  }
  $reprequest->closeCursor();
  ?>
</div>


<script src="index.js"></script>
<footer>
</footer>
</body>
</html>
