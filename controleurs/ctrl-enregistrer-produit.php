<?php

	session_start() ;
	
	$resOp = TRUE ;
	
	$code = $_GET[ 'code' ] ;
	$libelle = $_GET[ 'libelle' ] ;
	$quantite = $_GET[ 'quantite' ] ;
	
	try {
		
		// VOTRE CODE ICI :
		// L'enregistrement du nouveau produit dans la base de données se fait en deux phases :
		// 1- Vérifier que le code du nouveau produit ne correspond pas à un produit déjà enregistré.
		//    Si tel est le cas (le code n'existe pas déjà), la variable $repOp n'est pas modifiée.
		//    Dans le cas contraire (le code existe déjà), la variable $resOp passe à FALSE.
		// 2- Si la variable $resOp vaut TRUE, enregistrer le nouveau produit.
		
		
		
		
		if( $resOp == TRUE ){
			header( 'Location: ../vues/vue-nouveau-produit.php?code=' . $code ) ;
		}
		else {
			header( 'Location: ../vues/vue-nouveau-produit.php?code=NOK&libelle=' . $libelle . '&quantite=' . $quantite ) ;
		}
	}
	catch( PDOException $e ){

		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;
	}
	
	
	
?>
