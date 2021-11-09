<?session_start()?>
<!DOCTYPE HTML>
<html lang=fr>
    <head>
        <title> </title> 
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <form action="model/addEtudiant.php" method="post">
            <h2> Formulaire d'ajout d'un utilisateur </h2>
            <div class="input-group">
                <label for="nom">Nom de l'utilisateur </label> 
                <input type="text" name="nom" id="nom"/> </br>
            </div>
            <div class="input-group">
                <label for="prenom">Prenom de l'utilisateur </label> 
                <input type="text" name="prenom" id="prenom"/> </br>
            </div>
            <div class="input-group">
                <label for="mail"> Mail </label> 
                <input type="text" name="mail" id="mail"/> </br>
            </div>
            <div class="input-group">
                <label for="mdp"> Mot de Passe de l'utilisateur </label> 
                <input type="password" name="mdp" id="mdp"> </br>
            </div>
            <div class="input-group">
                <label for="classe">Classe de l'utilisateur </label> 
                <input type="text" name="classe" id="classe"/> </br>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="valider">Valider </button>
                <a href="gererEtudiant.php"> <button class="btn del_btn" type="button"> Annuler </button> </a>
            </div>
        </form>
    </body>
</html>