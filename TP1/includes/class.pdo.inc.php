<?php

class PdoGsb
{
    private static $hostname = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $database = 'tpcyber1';
    private static $monPdo;
    private static $monPdoGsb = null;

    private function __construct()
    {
        try {
            $dsn = 'mysql:host=' . self::$hostname . ';dbname=' . self::$database;
            self::$monPdo = new PDO($dsn, self::$username, self::$password);
            self::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$monPdo->exec('SET NAMES utf8');
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            die(); 
        }
    }

    public static function getPDOGsb()
    {
        if (self::$monPdoGsb === null) {
            self::$monPdoGsb = new PdoGsb();
        }
        return self::$monPdoGsb;
    }


    public function enregistrerClient($nom, $prenom, $email, $mdpHash) {
        $requetePrepare = self::$monPdo->prepare(
            'INSERT INTO clients (nom, prenom, mail, mdp) VALUES (:nom, :prenom, :email, :mdp)'
        );
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':email', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mdp', $mdpHash, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    public function login($email){
        $requetePrepare = self::$monPdo->prepare(
            'SELECT * FROM clients where mail = :email'
        );
        $requetePrepare->bindParam(':email', $email, PDO::PARAM_STR);
        $requetePrepare->execute();
        $resulta = $requetePrepare->fetch(PDO::FETCH_ASSOC);
        return $resulta;
    }

    public function recup_clients(){
        $requetePrepare = self::$monPdo->prepare(
            'SELECT * FROM clients'
        );
        $requetePrepare->execute();
        $resultat = $requetePrepare->fetchAll();
       
        return $resultat;
    } 

    public function modifprofil($nom,$prenom,$email,$id_client){
        $requetePrepare = self::$monPdo->prepare(
            'UPDATE clients SET nom = :nom, prenom = :prenom, mail = :email WHERE id = :id'
        );
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':email', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':id', $id_client, PDO::PARAM_STR);
        $requetePrepare->execute();
    }
    public function supprofil($id){
        $requetePrepare = self::$monPdo->prepare(
            'DELETE FROM clients WHERE `clients`.`id` = :id'
        );
        $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    public function recherche_client($recherch){
        $requetePrepare = self::$monPdo->prepare(
            'SELECT nom FROM clients WHERE nom LIKE  :recherch  ORDER BY nom ASC'
        );
        $requetePrepare->bindParam(':recherch', $recherch, PDO::PARAM_STR);
        $requetePrepare->execute();
    }
}
    
?>