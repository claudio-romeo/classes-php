<?php
session_start();
class Db {
    private  $_dbHost = "localhost";
    private  $_dbUser = "root";
    private  $_dbPassword = "";
    private  $_dbName = "classes";

    protected  $_bdd = null;

public function __construct()
{
    $this->bdd();
}


public function bdd()
{
    if($this->_bdd == NULL) 
    {
        $this->_bdd = new mysqli($this->_dbHost, $this->_bdd, $this->_bdd, $this->_bdd,);
        if ( $this->_bdd->connect_errno) {
            echo "Failed to connect to MySQL: " .  $this->_bdd -> connect_error;
            exit();
        }
    }
}
}
?> 
