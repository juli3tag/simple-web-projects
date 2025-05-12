<?php
/*  Gonzalez Gutierrez Julieta Maiara 🌷
    
    Descripcion: Elimina un producto de la base de datos para el TP3 de la materia Programación Web.
    Este archivo recibe el ID del producto a eliminar y lo elimina de la base de datos.
    */

require 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    header("Location: index.php");
} else {
    echo "ID no proporcionado";
}
?>
