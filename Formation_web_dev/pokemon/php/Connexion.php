<?php

/**
 *
 */
class Connexion
{
  private $identification = array($username => '');
  private $key = array($passwd => '');
  private $coin;


  public function __construct(string $username, string $passwd) : string
  {
    if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
      }

    if($_SESSION[('username' !== "") && ('passwd' !== ""){
                    $user = $_SESSION['username'&&'passwd'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
      }

  }

  public function getSignIn() : bool
  {
    return $this->identification;
    return $this->key;
  }

  public function setSignIn(string $username, string $passwd) : string
  {
    $this->identification = $username;
    return $this->username;
    $this->key = $passwd;
    return $this->passwd;
  }

}


?>
