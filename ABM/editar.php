<?php

/*  Gonzalez Julieta 🌷
    
    Descripción: Edita un producto en la base de datos para el TP3 de la materia Programación Web.

    Este archivo recibe el ID del producto a editar y muestra un formulario con los datos actuales del producto.
    Al enviar el formulario, se actualizan los datos en la base de datos.
    Se utiliza PDO para la conexión y ejecución de consultas SQL.
    */

require 'conexion.php';

// Conexión a la base de datos
// Este archivo establece la conexión a la base de datos MySQL utilizando PDO.
if (!isset($_GET['id'])) {
    die("ID no proporcionado");
}
$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$producto = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$producto) {
    die("Producto no encontrado");
}
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4">Editar Producto</h1>
    <form method="POST" action="actualizar.php">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($producto['nombre']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"><?= htmlspecialchars($producto['descripcion']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="<?= $producto['precio'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="<?= $producto['stock'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Categoría</label>
            <input type="text" name="categoria" class="form-control" value="<?= htmlspecialchars($producto['categoria']) ?>">
        </div>
        <div class="mb-3">
            <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control" value="<?= htmlspecialchars($producto['proveedor']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
