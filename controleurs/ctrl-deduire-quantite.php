<?php

	session_start() ;
	
	$resOp = TRUE ;
	
	$code = $_GET[ 'codeProduit' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
	
	
	try {
		
		// VOTRE CODE ICI :
		// Diminuer la quantité d'un produit dans la base de données se fait en deux phases :
		// 1- Vérifier que la quantité est suffisante.
		//    Si tel est le cas, la variable $repOp n'est pas modifiée.
		//    Dans le cas contraire, la variable $resOp passe à FALSE.
		// 2- Si la variable $resOp vaut TRUE, mettre à jour la quantité du produit.
		
		
		
		
		if( $resOp == TRUE ){
			header( 'Location: ../vues/vue-stock.php' ) ;
		}
		else {
			header( 'Location: ../vues/vue-sortie-quantite.php?stock=NOK&code=' . $code ) ;
		}
	}
	catch( PDOException $e ){

		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}

?>
