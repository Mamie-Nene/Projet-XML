<?php
require_once 'databaseConnection.php';
    class ProfClasseCours
    {
        public static function getAllGestionCours()
        {
            $connexion=databaseConnection::getDatabaseConnexion();
                //on met la requete oour récuperer tous les articles 
                $requete='SELECT * FROM Prof_Classe_Cours ';
                // et pour le la fonction query c'est pour executer (preparer) la requete
                $donnees =$connexion->query($requete);
               //affiche en ligne (rows) et stockage du resultat dans un tableau associatif
                $rows =$donnees->fetchAll();
                return $rows;
        }

        
    }
        
?>