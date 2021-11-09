<?php
require_once 'databaseConnection.php';
    class Users
    {
        public $id;
        public $nom;
        public $prenom;
        public $mail;
        public $mdp;
        public $userRole;
        public $classe;

        public static function getAllProfesseur()
        {
            $connexion=databaseConnection::getDatabaseConnexion();
                //on met la requete oour récuperer tous les articles 
                $requete='SELECT * FROM Users where userRole=2';
                // et pour le la fonction query c'est pour executer (preparer) la requete
                $donnees =$connexion->query($requete);
               //affiche en ligne (rows) et stockage du resultat dans un tableau associatif
                $rows =$donnees->fetchAll();
                return $rows;
        }

        public static function getUserById($id)
        {
             //on recupere la connexion à la bd
        $connexion=databaseConnection::getDatabaseConnexion();
        $requete='SELECT * FROM Users WHERE id='.$id;
        //affiche en ligne (rows) et pour le la fonction query c'est pour executer la requete
        $donnees =$connexion->query($requete);
        $rows =$donnees->fetch();
        return $rows;
    }
        public static function getAllEtudiant()
        {
            $connexion=databaseConnection::getDatabaseConnexion();
                //on met la requete oour récuperer tous les articles 
                $requete='SELECT * FROM Users where userRole=3';
                // et pour le la fonction query c'est pour executer (preparer) la requete
                $donnees =$connexion->query($requete);
               //affiche en ligne (rows) et stockage du resultat dans un tableau associatif
                $rows =$donnees->fetchAll();
                return $rows;
        }
    }
?>