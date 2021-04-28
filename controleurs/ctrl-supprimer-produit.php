<?php

	session_start() ;
	
	$code = $_GET[ 'codeProduit' ] ;
		
	try {
		
		// VOTRE CODE ICI : Supprimer le produit dont le code correspond à la valeur de la variable $code
		
		
		
				
		header( 'Location: ../vues/vue-stock.php' ) ;
	}
	catch( PDOException $e ){
		
		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}
?>
