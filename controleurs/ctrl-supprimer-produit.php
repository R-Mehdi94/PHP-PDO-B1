<?php

	session_start() ;
	
	$code = $_GET[ 'code' ] ;
		
	try {
		
		// VOTRE CODE ICI : Supprimer le produit dont le code correspond à la valeur de la variable $code

		// Connexion à la BD
		
		$bd = new PDO(
			'mysql:host=localhost;dbname=sanayabio_stocks' ,
			'sanayabio' ,
			'sb2021'
		) ;





		//Création de la requete SQL

		$sql = 'delete '
		.'from Produit '
		.'where code = :code';




		
		// Préparation de la requete SQL
		
		$st = $bd -> prepare( $sql) ;





		// Exécution de la requete SQL

		$st -> execute(
						array(':code'=>$code)
					);




		
		// Fermeture de la connexion
					
		unset($bd);





		// Redirection vers la vue 

		header( 'Location: ../vues/vue-selection-produit.php' ) ;
		
				
		
	}
	catch( PDOException $e ){
		
		session_unset() ;
		session_destroy() ;
		
		header( 'Location: ../index.php?echec=0' ) ;

		die('Erreur : ' . $e->errorInfo());

		/*var_dump($pdo->errorInfo());
		die("Erreur SQL");*/
	}


?>
