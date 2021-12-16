<?php
class connection
{
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "praktikumweb";

    public function connect()
    {

        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

        if ($mysqli->connect_error) {        
            echo "Fail Connection To database : (" . $mysqli->connect_error . ")";         
        }

        return $mysqli;
    }
}