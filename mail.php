<?php 

//initialisation de la reponse
$response = "no";

//verification de l'existence puis de la validité du parametre en get
if(isset($_GET["mail"])){
	if(filter_var($_GET["mail"], FILTER_VALIDATE_EMAIL)){
		//modification de la reponse si parametre valide
    	$response = "ok";
	}
}

return $response;
