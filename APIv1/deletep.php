<?php

header("Content-Type: application/json"); //header de las respuestas

include_once 'persona.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == 'DELETE'){

    if(isset($_GET['id'])){ //el put, tiene get.
	
		//-------se elimina la persona a la BD----
		 $persona = new Persona();
		 $estado = $persona->deletep($_GET['id']);
		//--------------------------------------

		$jsonRetorno["estado"]=$estado;
		echo json_encode($jsonRetorno);

    }
    else{
        echo "Falta id.";
    }
}
else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
}