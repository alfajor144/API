<?php

header("Content-Type: application/json"); //header de las respuestas

include_once 'persona.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == 'PUT'){

    $_PUT = json_decode(file_get_contents('php://input'),true);

    if(isset($_GET['id'])){ //el put, tiene get.

        $id = $_GET['id'];
        $nombre = $_PUT['nombre'];
		
		//-------se actualiza la persona a la BD----
		 $persona = new Persona();
		 $estado = $persona->updatep($id, $nombre);
		//--------------------------------------
	
        $jsonRetorno['estado']=$estado;
        echo json_encode($jsonRetorno); 
    }
    else{
        $jsonRetorno['estado']="Falta el id";
        echo json_encode($jsonRetorno); 
    }
}
else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
}
