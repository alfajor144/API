<?php

header("Content-Type: application/json"); //header de las respuestas
header('Access-Control-Allow-Origin: *'); //permite crusar informacion entre distintos dominos, muy importante! 

include_once 'persona.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == 'POST'){

    $_POST = json_decode(file_get_contents('php://input'),true); //se obtiene toda la info del body
    $nombre = $_POST['nombre']; //se obtiene el valor del parametro 'nombre'
	
	//-------se añade la persona a la BD----
	 $persona = new Persona();
	 $estado = $persona->insertp($nombre);
	//--------------------------------------
	$jsonRetorno["estado"]=$estado;
	echo json_encode($jsonRetorno);
}
else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
}

