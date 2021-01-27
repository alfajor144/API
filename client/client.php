<?php
//----------------------------Inser persona----------------------------------------------------------

echo "<h2>INSERT Persona</h2>";

$base="http://localhost";
$recurso = "insertp.php";
$url = $base.'/01php/API/APIv1/' . $recurso;

$data = array("nombre" => "jukie");
// posteo con cURL
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
echo "Res: ".$response;
curl_close($curl);

echo "<hr>";

//----------------------------Delete persona----------------------------------------------------------

echo "<h2>DELETE Persona</h2>";

$base="http://localhost";
$recurso = "deletep.php";
$url = $base.'/01php/API/APIv1/' . $recurso;
$urlId = $url . '?id=5';

$curl = curl_init($urlId);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
echo "Res: ".$response;
curl_close($curl);

echo "<hr>";
//----------------------------Get all persona----------------------------------------------------------

$recurso = "readp.php";
$url = $base.'/01php/API/APIv1/' . $recurso;

$data = file_get_contents($url); //sensilla forma de hacer un GET
$myjson = json_decode($data);

//{"persona":[{"id":"1","nombre":"Mauro"},{"id":"2","nombre":"Hernesto"},{"id":"3","nombre":"Camila"},{"id":"4","nombre":"jorgito"}],"estado":"Mostrado exitosamnete"}

echo "<h2>GET ALL Persona</h2>";

for($i=0;$i<count($myjson->persona);$i++){
    echo "(id: ";
    echo $myjson->persona[$i]->id;
    echo " nombre: ";
    echo $myjson->persona[$i]->nombre;
    echo ")<br>";
}
echo "<hr>";

?>