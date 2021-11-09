<!DOCTYPE html>
<html>
<head>
	<title>BIENVENUE SUR VOTRE PLATEFORME DE GESTION D'EXAMEN EN LIGNE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./assets/img/favicon.jpeg">
	<meta charset="UTF-8">
	<meta charset="ISO-8859-15">
	<meta name="keywords" content="Livres">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./assets/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
	<script type="text/javascript" src="./assets/js/all.js"></script>
	<style type="text/css">
		html,body
		{
			height: 100% !important;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow-x: hidden;
		}
	</style>
</head>
<body> 
		<div id="welcome" class="container-fluid">
		 <div class="row shadow"></div>
		 <br>
		 <div class="welcome-wrapper">
		 	<form method="post" action="login.php">
				<div class="row d-flex justify-content-center">
						<div class="col-auto">
							  <img src="assets/img/01.jpg" class="rounded-circle" style="width: 250px;height: 250px;">
						</div>
				</div>
				<br>
				<div class="row d-flex justify-content-center">
						<div class="col-8 col-md-5">
							<div class="md-form">
								<i class="fas fa-signature prefix"></i>
								<input type="text" id="mail" name="mail" class="form-control" required="">
								<label for="mail">Email</label>
							</div>							
						</div>
				</div>
				<br>
				<div class="row d-flex justify-content-center align-items-center">
						<div class="col-8 col-md-5 offset-2">
							<div class="md-form">
								<i class="fas fa-key prefix"></i>
								<input id="mdp" type="password" name="mdp" class="form-control" required="">
								<label for="mdp">Mot de Passe</label>
							</div>
						</div>
						<div class="col-2">
								<i class="fas fa-eye" id="eye" style="position: relative;cursor: pointer;" onclick="seeP();"></i>
						</div>
				</div>

				<br>
				<div class="row d-flex justify-content-center">
					<div class="col-auto">
						<button type="submit" name="connexion" class="btn peach-gradient"><i class="fas fa-plug"></i>&nbsp;Connexion</button>
					</div>
					
				</div>
			</form>
			<br><br>
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-auto alert alert-light" style="background-color: #ffc400;color: white;">
						Connectez-vous et accédez à votre Site de Gestions d'examen ! <i class="far fa-thumbs-up"></i>
				</div>
			</div>
		  </div>
		</div>

<!-- Modal -->
		<script type="text/javascript" src="assets/js/all.js"></script>
</body>
</html>