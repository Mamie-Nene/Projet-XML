<?php 
    session_start();
    $_SESSION["nom"] = "DIALLO";
    $_SESSION["prenom"] = "Gallo";
?>
<?session_start()?>
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
                            <a class="active" href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Accueil</span>                                
                            </a>
                        </li>
                        <li class="sub">
                            <a  href="visualisation.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Gestion professeur</span>                                
                            </a>
                        </li>
                        <li class="sub">
                            <a  href="visualisation.php">
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
                        <div class="col-lg-9">        
                        </div>
                    </div>
                </section>
            </section>
            <!-- fin conteneur-->
        </section>
    
    </body>
</html>