<?php
/*  Gonzalez Gutierrez Julieta Maiara 
    Legajo: VINF014900
    Fecha de entrega: 28/04/2025

    Descripción: Actualiza un producto en la base de datos para el TP3 de la materia Programación Web.
    Este archivo recibe los datos del formulario de edición y actualiza el producto correspondiente en la base de datos.
    Se utiliza PDO para la conexión y ejecución de consultas SQL.
*/
require 'conexion.php'; // Conexión a la base de datos


if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica si el formulario fue enviado
    // Recibe los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];

    $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, stock = ?, categoria = ?, proveedor = ? WHERE id = ?"; // Prepara la consulta SQL para actualizar el producto
    // Usa parámetros para evitar inyecciones SQL
    $stmt = $conn->prepare($sql); 
    $stmt->execute([$nombre, $descripcion, $precio, $stock, $categoria, $proveedor, $id]);

    header("Location: index.php");
}
?>
