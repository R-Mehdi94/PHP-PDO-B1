<?php 
	if( isset($_GET[ 'login' ]) ){
		$login = $_GET[ 'login' ] ;
	} 
	else {
		$login = '' ;	
	} 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Sanaya Bio - Gestion des Stocks</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	</head>

	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Sanaya Bio</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</nav>
		
		
		<form action="controleurs/ctrl-authentification.php" method="GET">
		
			<div class="mb-3">
				<label class="col-sm-2 col-form-label">Nom de connexion</label>
				<div class="col-sm-10">
					<input type="text" name="login" value="<?php echo $login ; ?>"/>
				</div>
			</div>
			
			<div class="mb-3">
				<label class="col-sm-2 col-form-label">Mot de passe</label>
				<div class="col-sm-10">
					<input type="password" name="mdp" />
				</div>
			</div>
			
			<div class="mb-3">
				<button class="btn btn-primary" type="submit">Valider</button>
				<button class="btn btn-primary" type="reset">Annuler</button>
			</div>
		
		</form>
		
		<?php if( isset($_GET[ 'echec' ]) ){ ?>
			<?php if( $_GET[ 'echec' ] == 1 ){ ?>			
				<div class="alert alert-danger" role="alert">
					Nom de connexion ou mot de passe incorrect.
				</div>
			<?php } else if( $_GET[ 'echec' ] == 0 ){ ?>
				<div class="alert alert-danger" role="alert">
					Site momentanement indisponible.
				</div>
			<?php } ?>
		<?php } ?>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	</body>

</html>
