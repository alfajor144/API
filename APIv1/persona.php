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
	
	public function getAll(){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			
			$sql = "SELECT id, nombre FROM persona";

			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				while($rows[] = mysqli_fetch_assoc($result));
				array_pop($rows); 
				$resultado["persona"] = $rows;
				$resultado["estado"]="Mostrado exitosamnete";
				return $resultado;
			}
			 else{
				$resultado["estado"]="No hay tuplas";
				return $resultado;
			}

			$this->conn->close();
		}
	}


	public function getByNombre($nombre){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			
			$sql = "SELECT id, nombre FROM persona WHERE nombre = '$nombre'";

			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				while($rows[] = mysqli_fetch_assoc($result));
				array_pop($rows); 
				$resultado["persona"] = $rows;
				$resultado["estado"]="Mostrado exitosamnete";
				return $resultado;
			}
			 else{
				$resultado["estado"]="No hay tuplas con ese nombre";
				return $resultado;
			}


			$this->conn->close();
		}
    }
	
	public function getById($id){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			
			$sql = "SELECT id, nombre FROM persona WHERE id = $id";

			$result = $this->conn->query($sql);
			if ($result->num_rows == 1) {
				while($rows[] = mysqli_fetch_assoc($result));
				array_pop($rows); 
				$resultado["persona"] = $rows;
				$resultado["estado"]="Mostrado exitosamnete";
				return $resultado;
			}
			 else{
				$resultado["estado"]="No hay tuplas con ese id";
				return $resultado;
			}


			$this->conn->close();
		}
    }

	public function insertp($nombre){
		
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
	
	public function updatep($id, $nombre){
		
		if ($this->conn->connect_error) {
			die();
			return 0;
		}
		else{
			$sql = "update persona SET nombre ='$nombre' WHERE id = $id";

			if ($this->conn->query($sql) === TRUE) {
				return "Actualizado exitosamente";
			} else {
				return "Error al intentar actualizar";
			}
			$this->conn->close();
		}
    }
  
}
?>