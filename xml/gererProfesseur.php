<?session_start()
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <title> Dashbord Admin </title>
        <link href="asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="asset/css/style.css" rel="stylesheet">
        <link href="asset/css/style-responsive.css" rel="stylesheet">
    </head>
    <body>
        <section id="container">
            <!-- debut header -->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <a href="index.php" class="logo"><b>Evaluation<span>ESP</span></b></a>
                    <!--logo end-->
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php"> Déconnexion </a> </li>
                    </ul>
                    </div>
            </header>
            <!-- fin header -->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered"><a href="profile.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                        <h4 class="centered"> Mr<?$_SESSION["nom"]?></h4>
                        <li class="mt">
                            <a  href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Accueil</span>                                
                            </a>
                        </li>
                        <li class="sub">
                            <a  class="active" href="gererProfesseur.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Gestion professeur</span>                                
                            </a>
                        </li>
                        <li class="sub">
                            <a  href="gererEtudiant.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Gestion Etudiants</span>                                
                            </a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!-- debut conteneur -->
            <section id="main-content">
                <section class="wrapper">
                    <div class="text-center"> 
                        <h2 > Bienvenue sur le site d'évaluation de l'ESP </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt">        
                        <div class="content-panel ">
                            <table class="table table-hover"> 
                                <thead>
                                    <tr>
                                        <th id="nom"> Nom </th>
                                        <th id="username"> Username</th>
                                        <th id="mdp"> Mot de passe </th>
                                        <th id="mail"> Mail </th>
                                        <th id="userRole"> Role </th>
                                        <th id="action"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    require_once 'Users.php';
                                        $users=Users::getAllProfesseur();
            
                            if(!empty($users))
                            {
                                foreach ($users as $user) 
                                {
                        ?>      
                                    <tr class="lien">
                                        <td> <?= $user['nom'] ?> </td>
                                        <td> <?= $user['prenom'] ?> </td>
                                        <td> <?= $user['mail'] ?> </td>
                                        <td> <?= $user['mdp'] ?> </td>
                                        <td> <?= $user['userRole'] ?> </td>
                                        <td> <a class="btn btn-theme" href="editProfesseur.php?id=<?=$user['id']?>"> Modifier </a> 
                                        <a class="btn btn-theme04" href="deleteUser.php?id=<?$user['id']?>">Supprimer </a> </td>
                                </tr>
                            <?php
                                }
                            } ?>
                            </table>
                             <a class="btn" href="addProfesseur.php"> Ajouter un professeur</a>
                        </div>
                    </div>
                </section>
            </section>
            <!-- fin conteneur-->
        </section>
    
    </body>
</html>