<?php
class persona{
    private $nombre;
    private $apellido;
    private $fechaN;
    private $pais;

    public function __construct($nombre, $apellido, $fechaN, $pais){
        $this->nombre = $nombre;
        $this->apellido= $apellido;
        $this->fechaN = $fechaN;
        $this->pais= $pais;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function read() {
        // Create query
        $query = 'SELECT
          id,
          nombre,
          fecha_creado
        FROM
          ' . $this->table . '
        ORDER BY
          fecha_creado DESC';
  
        // Prepare statement
        $stmt = $this->conn->prepare($query);
  
        // Execute query
        $stmt->execute();
  
        return $stmt;
      }
  
}
?>