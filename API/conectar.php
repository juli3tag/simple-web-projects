<?php
/*  Gonzalez Gutierrez Julieta Maiara
    Legajo: VINF014900
    Fecha de entrega: 05/05/2025
    Descripcion: Script de conexión a la base de datos para el TP4 de Desarrollo Web
    */

// Conexión a la base de datos
class Database {
    private $host = 'localhost';
    private $db_name = 'clientes_hp';
    private $username = 'root';
    private $password = 'hola';       

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Error de conexion: " . $exception->getMessage();
        }
        return $this->conn;
    }
}   

