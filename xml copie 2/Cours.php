<?php
require_once 'databaseConnection.php';
    class Cours
    {
        public $id;
        public $nom;

        public static function getAllCours()
        {
            $connexion=databaseConnection::getDatabaseConnexion();
                //on met la requete oour récuperer tous les articles 
                $requete='SELECT * FROM Cours';
                // et pour le la fonction query c'est pour executer (preparer) la requete
                $donnees =$connexion->query($requete);
               //affiche en ligne (rows) et stockage du resultat dans un tableau associatif
                $rows =$donnees->fetchAll();
                return $rows;
        }

        public static function getCoursById($id)
        {
             //on recupere la connexion à la bd
        $connexion=databaseConnection::getDatabaseConnexion();
        $requete='SELECT * FROM Cours WHERE id='.$id;
        //affiche en ligne (rows) et pour le la fonction query c'est pour executer la requete
        $donnees =$connexion->query($requete);
        $rows =$donnees->fetch();
        return $rows;
        }
    }
?>