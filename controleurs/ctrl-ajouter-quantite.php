<?php
	
	session_start() ;
	
	$code = $_GET[ 'code' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
		
	try {
		
		// VOTRE CODE ICI
		
		// Connexion à la BD
		
		$bd = new PDO(
			'mysql:host=localhost;dbname=sanayabio_stocks' ,
			'sanayabio' ,
			'sb2021'
		) ;





		//Création de la requete SQL

		$sql = 'update Produit '
		.'set quantite = quantite + :quantite '
		.'where code = :code';





		// Préparation de la requete SQL
		
		$st = $bd -> prepare( $sql) ;





		// Exécution de la requete SQL

		$st -> execute(
						array(':code'=>$code , ':quantite'=>$quantite)
					);




		
		// Fermeture de la connexion
					
		unset($bd);

		
		
		

		// Redirection vers la vue 

		header( 'Location: ../vues/vue-stock.php' ) ;
	}
	catch( PDOException $e ){

		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}	
		
	
?>
