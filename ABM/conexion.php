<?php
/*  Gonzalez Julieta 🌷
    
    Descripción: Conexión a la base de datos para el TP3 de la materia Programación Web.
    Este archivo establece la conexión a la base de datos MySQL utilizando PDO.
*/


$server = "localhost";
$database = "tienda_hp";
$username = "root"; // Si usás XAMPP por defecto es "root"
$password = "hola"; // Y contraseña vacía

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
