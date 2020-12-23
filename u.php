<?php

header("Content-Type: application/json"); //header de las respuestas


include_once 'Database.php';
include_once 'persona.php';


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();


$metodo = $_SERVER['REQUEST_METHOD'];
if($metodo == 'POST'){
     // http://localhost/01php/API/u.php
    // POSTMAN: raw, json, body: 
    // {
    //     "nombre":"jorgito"
    // }
    $_POST = json_decode(file_get_contents('php://input'),true); //se obtiene toda la info del body
    $nombre = $_POST['nombre']; //se obtiene el valor del parametro 'nombre'

    $jsonRetorno["estado"]="todo bien";
    echo json_encode($jsonRetorno); // se deviele en forma de json 
}

if($metodo == 'GET'){

    // http://localhost/01php/API/u.php
    if(!isset($_GET['nombre']) && !isset($_GET['id'])){
        echo "Error de parametros";
    }

    // http://localhost/01php/API/u.php?nombre=jorgito
    if(isset($_GET['nombre']) && !isset($_GET['id'])){
        for($i=0;$i<4;$i++){ //esto seria un get all
            $jsonRetorno[$_GET['nombre'].$i]=$i;
        }
        echo json_encode($jsonRetorno); 
    }

    // http://localhost/01php/API/u.php?nombre=jorgito&id=12
    if(isset($_GET['nombre']) && isset($_GET['id'])){

        $jsonRetorno["nombre"]=$_GET['nombre'];
        $jsonRetorno["id"]=$_GET['id'];
        echo json_encode($jsonRetorno); // se deviele en forma de json 
    }
}

if($metodo == 'PUT'){
    // http://localhost/01php/API/u.php?id=12
    // POSTMAN: raw, json, body: 
    // {
    //     "nombre":"jorgito"
    // }
    $_PUT = json_decode(file_get_contents('php://input'),true);

    if(isset($_GET['id'])){ //el put, tiene get.

        $id = $_GET['id'];
        $nombre = $_PUT['nombre'];

        $jsonRetorno['nombre']=$nombre;
        $jsonRetorno['id']=$id;
        echo json_encode($jsonRetorno); // se deviele en forma de json 
        
    }
    else{
        echo "Falta id.";
    }
}

if($metodo == 'DELETE'){
    // http://localhost/01php/API/u.php?id=12
    if(isset($_GET['id'])){ //el put, tiene get.
        $jsonRetorno['id']=$_GET['id'];
        $jsonRetorno['Estado']='deleted';
        echo json_encode($jsonRetorno); // se deviele en forma de json     
    }
    else{
        echo "Falta id.";
    }
}

?>