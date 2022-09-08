<?php

	session_start() ;
	
	$resOp = TRUE ;
	
	$code = $_GET[ 'code' ] ;
	$quantite = $_GET[ 'quantite' ] ;

	$quantite2 = array();
	
	
	
	try {
		
		// VOTRE CODE ICI :
		// Diminuer la quantité d'un produit dans la base de données se fait en deux phases :
		// 1- Vérifier que la quantité est suffisante.
		//    Si tel est le cas, la variable $repOp n'est pas modifiée.
		//    Dans le cas contraire, la variable $resOp passe à FALSE.
		// 2- Si la variable $resOp vaut TRUE, mettre à jour la quantité du produit.
		
		$bd = new PDO(
			'mysql:host=localhost;dbname=sanayabio_stocks' ,
			'sanayabio' ,
			'sb2021'
		) ;

		$sql2 ='select quantite, code'
		. ' from Produit '
		. 'where code = :code' ;

		
		

		$st2 = $bd->prepare($sql2);

		

		$st2 -> execute(array(':code'=>$code, )) ;

		

		$quantite2 = $st2 -> fetchall() ;

		if($quantite2['quantite'] < $quantite){
			$resOp == FALSE; 
		}
		
		if( $resOp == TRUE ){



			//Création de la requete SQL

			$sql = 'update Produit '
			.'set quantite = quantite - :quantite '
			.'where code = :code';





			// Préparation de la requete SQL
			
			$st = $bd -> prepare( $sql) ;





			// Exécution de la requete SQL

			$st -> execute(
							array(':code'=>$code , ':quantite'=>$quantite)
						);




			
			// Fermeture de la connexion

			unset($bd);
						
			

			header( 'Location: ../vues/vue-stock.php' );

			
			
		}
		else {
			header( 'Location: ../vues/vue-sortie-quantite.php?stock=NOK&code=' . $code ) ;
		}
	}
	catch( PDOException $e ){

		/*session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;*/

		var_dump($pdo->errorInfo());
		die("Erreur SQL");
	}

?>
