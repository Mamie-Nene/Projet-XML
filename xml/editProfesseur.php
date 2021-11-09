<?session_start()?>
<!DOCTYPE HTML>
<html lang=fr>
    <head>
        <title> </title> 
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
    <body>
        <form action="models/editProfesseur.php" method="post">
         <h2> Formulaire de modification d'un professeur </h2>
         <? 
         require_once 'Users.php';
         $user=Users::getUserById($_GET['id']);
         if(!empty($user)) 
         { 
        ?>
            <div class="input-group">
                <label for="nom"> Nom Professeur </label> 
                <input type="text" name="nom" id="nom" value=" <?= $user['nom'] ?>"/> 
            </div>
            <div class="input-group">
                <label for="prenom"> Prenom </label> 
                <input type="textarea" name="prenom" id="prenom"  value=" <?= $user['prenom']?> " /> 
            </div>
           
            <div class="input-group">
                <label for="mail"> mail </label>
                <input type="number" name="mail" id="mail" value ="<?= $user['mail']?>"/>
           </div>
           <div class="input-group">
                <label for="mdp"> mot de passe </label>
                <input type="number" name="mdp" id="mdp" value ="<?= $user['mdp']?>"/>
           </div>
           <?} ?>
            <div class="input-group">
                <button button class="btn" type="submit" name="modifier">Modifier </button>
                <a href="gererProfesseur.php"> <button class="btn del_btn" type="button"> Annuler </button> </a>
            </div>
        </form>
    </body>
</html>
