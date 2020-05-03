<?php
	// COPYRIGHT MATHIEU MULOT
    $serveur="localhost";
	$utilisateur="root";
	$mdp="";
	$base="structures_json";

	// Ouverture connexion à MySQL
	$connexion=new mysqli($serveur, $utilisateur, $mdp, $base);

	// si erreur
	if ($connexion->connect_error) {

		die('Erreur connexion base de données : '
			.$connexion->connect_error);
	}

	$res=$connexion->query("SELECT * FROM structure");

	//var_dump($res);

	$output=array();
	if ($res) {
		while($e=$res->fetch_assoc()) {
			$output[]=array_map('utf8_encode',$e);
			//var_dump($e);
		}
		$res->close();
	}
	
	$connexion->close();
	$jsString = json_encode($output,JSON_UNESCAPED_UNICODE);
	echo $jsString;
?>
