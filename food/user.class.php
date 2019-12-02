<?php 

include "cnx.class.session.php";

class User {
    private $pdo;

    function __construct()
    {
        $con = new baseDonnee;
        $this->pdo = $con->connectBD();

    }
    public function register ($username, $email,$pass)
    {
        try
        {
            $sql = "INSERT INTO  user(username,email,pass,created_at)
                    VALUES (:username,:email,:pass,NOW())";
            $query = $this->pdo->prepare($sql);
            $query -> bindParam(":username",$username);
            $query -> bindParam(":email",$email);
            $query -> bindParam(":pass",$pass);
            $query->execute();
            return $query;
        }   catch(PDOException $e){
            echo "Donkey Kong has caught an exception:".$e->getMessage();            
        }
    }
}