<?session_start()?>
<!DOCTYPE HTML>
<html lang=fr>
    <head>
        <title> </title> 
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <form action="model/addProfesseur.php" method="post">
            <h2> Formulaire d'ajout d'un professeur </h2>
            <div class="input-group">
                <label for="nom">Nom  </label> 
                <input type="text" name="nom" id="nom"/> </br>
            </div>
            <div class="input-group">
                <label for="prenom">Prenom  </label> 
                <input type="text" name="prenom" id="prenom"/> </br>
            </div>
            <div class="input-group">
                <label for="mail"> Mail </label> 
                <input type="mail" name="mail" id="mail"/> </br>
            </div>
            <div class="input-group">
                <label for="mdp"> Mot de Passe  </label> 
                <input type="password" name="mdp" id="mdp"> </br>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="valider">Valider </button>
                <a href="gererProfesseur.php"> <button class="btn del_btn" type="button"> Annuler </button> </a>
            </div>
        </form>
    </body>
</html>