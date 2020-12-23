<?php

header("Content-Type: application/json"); //header de las respuestas

include_once 'persona.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo == 'GET'){
		
    if(!isset($_GET['id'])){

		if(isset($_GET['nombre'])){
			//-------se actualiza la persona a la BD----
			$persona = new Persona();
			$resultado = $persona->getByNombre($_GET['nombre']);
		   //--------------------------------------
		   echo json_encode($resultado);
		}
		else{
			//-------se actualiza la persona a la BD----
			 $persona = new Persona();
			 $resultado = $persona->getAll();
			//--------------------------------------
			echo json_encode($resultado);
		}

    }
	else{
		//-------se actualiza la persona a la BD----
		  $persona = new Persona();
		  $resultado = $persona->getById($_GET['id']);
		// //--------------------------------------
         echo json_encode($resultado);

	}
 
}
else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
}

