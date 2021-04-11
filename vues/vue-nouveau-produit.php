<?php session_start() ; ?>


<?php 

	$produits = array(
	
		array(
			'code' => 'AAAA1' ,
			'libelle' => 'Aaaaa' ,
		) ,
		
		array(
			'code' => 'BBBB2' ,
			'libelle' => 'Bbbbb' ,
		) ,
		
		array(
			'code' => 'CCCC3' ,
			'libelle' => 'Ccccc' ,
		)
	
	) ;

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
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-stock.php">Stock</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-nouveau-produit.php">Nouveau</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-selection-produit.php">Retrait</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-entree-quantite.php">Entrée</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-sortie-quantite.php">Sortie</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<a class="nav-link" href="../vues/vue-sortie-quantite.php"><?php echo $_SESSION[ 'prenom' ] . ' ' . $_SESSION[ 'nom' ]  ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../controleurs/ctrl-deconnexion.php">se déconnecte...</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<h4 class="alert alert-primary" role="alert">
			Nouveau produit à la vente
		</h4>
		
		<form action="../controleurs/ctrl-enregistrer-produit.php" method="GET">
		
			<div class="mb-3">
				<label class="col-sm-2 col-form-label">Code :</label>
				<div class="col-sm-10">
					<input type="text" name="code" />
				</div>
			</div>
			
			<div class="mb-3">
				<label class="col-sm-2 col-form-label">Libellé :</label>
				<div class="col-sm-10">
					<input type="text" name="libelle" />
				</div>
			</div>
		
			<div class="mb-3">
				<label class="col-sm-2 col-form-label">Quantité :</label>
				<div class="col-sm-10">
					<input type="number" name="quantite" value="0" min="0" max="200" />
				</div>
			</div>
			
			
			<div class="mb-3">
				<button class="btn btn-primary" type="submit">Enregistrer</button>
				<button class="btn btn-primary" type="reset">Annuler</button>
			</div>
		
		</form>
		
		
		<?php if( isset( $_GET[ 'codeProduit' ] ) ){ ?>
			<?php if( $_GET[ 'codeProduit' ] == 'NOK' ){ ?>
				<div class="alert alert-danger" role="alert">
					Le produit existe déjà dans la base.
				</div>
			<?php } else { ?>
				<div class="alert alert-success" role="alert">
					Produit <?php echo $_GET[ 'codeProduit' ] ; ?> enregistré.
				</div>
			<?php } ?>
		<?php } ?>		
		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	</body>

</html>
