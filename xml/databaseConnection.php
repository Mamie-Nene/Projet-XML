<?php 
    class databaseConnection
    {
        public static function getDatabaseConnexion()
        {
        //connexion à la bd
            try 
            {   
                $db= new PDO('mysql:host=127.0.0.1;dbname=dgi_db;charset=utf8','root','passer123');
                 //dsn:url de notre base
            }
            catch (Exception $e){
                die('Erreur : ' .$e->getMessage()); //pour arreter l'execution

            }
            return $db;
        }
    }
?>