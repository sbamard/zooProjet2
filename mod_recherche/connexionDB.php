<?php

/**
 * Description of connexionDB
 *
 * @author Simon
 */

class connexionDB { 

    private $host = 'localhost';
    private $name = 'disiiZoo';
    private $user = 'root';
    private $password = ''; 
    private $connexion;

    function __construct($host = null, $name = null, $user = null, $password = null) { 
        if ($host != null) {
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;       
            $this->pass = $password;
        }
        try {                                                                 
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
                    $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        } catch (PDOException $e) { 
            echo 'Message d\'erreur : ' . $e->getMessage();
            exit();          
        }
    }

    public function query($sql, $data = array()) { 
        $requete = $this->connexion->prepare($sql);
        $requete->execute($data);
        return $requete;
    }

}

$DB = new connexionDB(); 