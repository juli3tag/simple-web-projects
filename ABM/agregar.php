<?php
/*  Gonzalez Julieta 🌷

    Descripcion: Agrega un nuevo producto a la base de datos para el TP3 de la materia Programación Web.
    Este archivo muestra un formulario para ingresar los datos del nuevo producto.
    Al enviar el formulario, se insertan los datos en la base de datos.
    */
    
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];
    $proveedor = $_POST['proveedor'];

    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, categoria, proveedor) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $descripcion, $precio, $stock, $categoria, $proveedor]);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4">Agregar Producto</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Categoría</label>
            <input type="text" name="categoria" class="form-control">
        </div>
        <div class="mb-3">
            <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</div>
</body>
</html>
