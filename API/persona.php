<?php

/*  Gonzalez Julieta 🌷
    
    Descripcion: Clase Persona para manejar la consulta de datos de una persona en la base de datos
    */

class Persona {
    private $conn;
    private $table = "personas";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function obtenerPorId($id) {
        $query = "SELECT nombre, apellido, profesion, edad FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array(
                'nombre' => $row['nombre'],
                'apellido' => $row['apellido'],
                'profesion' => $row['profesion'],
                'edad' => $row['edad']
            );
        } else {
            return null;
        }
    }
}
