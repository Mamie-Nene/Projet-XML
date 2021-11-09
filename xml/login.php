<?php 
    session_start();
    if(isset($_POST['connexion'])) //si l'user appuie sur le bouton connexion 
    {
        if( (empty($_POST['mail'])) OR (empty($_POST['mdp'])))
        {
            echo 'un des champs est vide !!';
        }
        else 
        { 
            $connexion =mysqli_connect("127.0.0.1", "root", "passer123", "dgi_db") ;
            //on sécurise les données entrées
            $mail=stripcslashes($_REQUEST['mail']);
            $password =stripcslashes($_REQUEST['mdp']);
            $mail= mysqli_real_escape_string($connexion,$mail);
            $password= mysqli_real_escape_string($connexion, $password);
            
            //hachage du mot de passe 
            //$pass_hache=password_hash($_POST['password'], PASSWORD_DEFAULT);
            //recherche dans la base de données pour voir si les données existent 
            $requete = mysqli_query($connexion,"SELECT * FROM  Users WHERE mail= '".$mail."' AND mdp='".$password."' ");
            //on verifie s'il ya un resultat
            if(mysqli_num_rows($requete)==0)
            {
                echo 'le compte n\'a pas été trouvé';
            } 
            else
            {
                //on ouvre la session
                $user= mysqli_fetch_array($requete);
                $_SESSION['nom']=$user['nom'];
                $_SESSION['userRole']=$user['userRole'];
                $_SESSION['id']=$user['id'];
                //echo " bienvenue , $uname"  ;
                if($user['userRole']==1)
                {
                    header("Location: admin.php");                
                }
                elseif($user['userRole']==2)
                {
                    header("Location: professeur.php");
                }
                else if($user['userRole']==3)
                {
                    header("Location: etudiant.php");
                }
            
                exit;
            }
                mysqli_close($connexion); //fermer la connexion

        }
    }
 
   
?>