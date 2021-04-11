<?php

	session_start() ;
	
	$resOp = 1 ;
	
	$code = $_GET[ 'code' ] ;
	$libelle = $GET[ 'libelle' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
	
	
	if( $resOp == 1 ){
		header( 'Location: ../vues/vue-nouveau-produit.php?codeProduit=' . $code ) ;
	}
	else {
		header( 'Location: ../vues/vue-nouveau-produit.php?codeProduit=NOK' ) ;
	}
?>
