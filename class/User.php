<?php
include("bdd.php");

class User 
{
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;
    
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









?>