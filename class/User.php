<?php
require_once("bdd.php");

class User extends Db
{
    private $id;
    public $_login;
    private $password;
    public $_email;
    public $_firstname;
    public $_lastname;
    
    public function __construct()
    {
      parent::__construct();
      // $this->_login = $login;
      // $this->_password = $password;
      // $this->_email = $email;
      // $this->_firstname = $firstname;
      // $this->_lastname = $lastname;
      // var_dump($firstname);
    }

    public function register($login, $password, $email, $firstname, $lastname)
    {
      // on commencer par hash le mdp 
      $password = password_hash($password, PASSWORD_DEFAULT);
    

      // ensuite on faite une requete en base de donné pour inscrire l'utilisateur 
        $requete = ("INSERT INTO utilisateurs (login, password , email , firstname , lastname) VALUES ($login,$password,$email,$firstname,$lastname)");

        mysqli_query($this->_bdd, $requete);
    }

    public function connect($login,$password)
    {
      // on verifie que le login que l'utilisateur ma fourni est bien en BDD 
      if(isset())

      // on verify si le mdp est correct

    }

    public function disconnect()
    {

    }

    public function delete()
    {

    }

    public function udpate($login, $password, $email, $firstname, $lastname)
    {

    }

    public function isConnected()
    {

    }

    public function getAllInfos()
    {

    }
    public function getLogin()
    {

    }
    public function getEmail()
    {

    }
    public function getFirstname()
    {

    }
    public function getLastname()
    {
        
    }

}
$toto = new User();
$isConnected = $toto->connect($_POST['login'], $pass);

if($isConnected == true) {

  header();
  $toto->_login;
} else





if(isset($_POST['Envoyer'])){

$login     = $_POST["login"];
$password  = $_POST["password"];
$email     = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname  = $_POST["lastname"];



$obj = new User($login, $password, $email, $firstname, $lastname);
$obj->register($login, $password, $email, $firstname, $lastname);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="login"></label>
        <input type="text" name = "login" placeholder="Login" required>
        <label for="password"></label>
        <input type="text" name = "password" placeholder="Mot de passe" required>
        <label for="email"></label>
          <input type="text" name = "email" placeholder="vôtre email" required>
        <label for="firstname"></label>
          <input type="text" name = "firstname" placeholder="Prénom" required>
        <label for="lastname"></label>
          <input type="text" name = "lastname" placeholder="Nom" required>
        <input type="submit" name="Envoyer">
    </form>
</body>
</html>