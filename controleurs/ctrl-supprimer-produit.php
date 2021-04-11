<?php

	session_start() ;
	
	$codeProduit = $_GET[ 'codeProduit' ] ;
		
	header( 'Location: ../vues/vue-stock.php' ) ;
?>
