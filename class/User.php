<?php
require_once("bdd.php");

class User extends Db
{
    private $id;
    public $_login;
    public $_email;
    public $_firstname;
    public $_lastname;
    
    public function __construct($login, $password, $email, $firstname, $lastname)
    {
      $this->login = $login;
      $this->password = $password;
      $this->email = $email;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      var_dump($firstname);
    }

    public function register($login, $password, $email, $firstname, $lastname)
    {
      
    }

    public function connect($login,$password)
    {

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
$toto = new User('ee', 'rr', 'dd', 'er', 'ee');





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