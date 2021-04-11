<?php

	session_start() ;
	
	$codeProduit = $_GET[ 'codeProduit' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
		
	header( 'Location: ../vues/vue-stock.php' ) ;
?>
