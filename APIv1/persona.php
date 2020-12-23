<?php
class persona{
    private $nombre;
	private $conn;

    public function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "apitest";
		$this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

	public function incertp($nombre){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			$sql = "INSERT INTO persona (nombre) VALUES ('$nombre')";
			if ($this->conn->query($sql) === TRUE) {
				return "Agregado exitosamente";
			} else {
				return "Error";
			}
			$this->conn->close();
		}
    }
	
	public function deletep($id){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			$sql = "DELETE FROM  persona where id = $id";
			
			if ($this->conn->query($sql) === TRUE) {
				return "Eliminado exitosamente";
			} else {
				return "Error";
			}
			$this->conn->close();
		}
    }
  
}
?>