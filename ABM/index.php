<?php
/*  Gonzalez Gutierrez Julieta Maiara 
    Legajo: VINF014900
    Fecha de entrega: 28/04/2025

    Descripcion: Fichero principal de la tienda de artículos de Harry Potter para el TP3 de la materia Programación Web.
    Este archivo muestra una lista de productos disponibles en la tienda.
    Permite agregar, editar y eliminar productos de la base de datos.
    */

require 'conexion.php';

// Consulta para obtener todos los productos
$sql = "SELECT * FROM productos";
$stmt = $conn->query($sql);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<!-- Este es un archivo HTML que muestra una tabla con los productos de la tienda de Harry Potter. 
     Permite agregar, editar y eliminar productos. 
     Se utiliza Bootstrap para el diseño y estilo de la página.-->
     
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Harry Potter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4 text-center">Tienda de artículos de Harry Potter ✨</h1>
    <a href="agregar.php" class="btn btn-primary mb-3">Agregar producto</a>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Proveedor</th>
                <th>Fecha agregado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= htmlspecialchars($producto['nombre']) ?></td>
                    <td><?= htmlspecialchars($producto['descripcion']) ?></td>
                    <td>$<?= $producto['precio'] ?></td>
                    <td><?= $producto['stock'] ?></td>
                    <td><?= htmlspecialchars($producto['categoria']) ?></td>
                    <td><?= htmlspecialchars($producto['proveedor']) ?></td>
                    <td><?= $producto['fecha_agregado'] ?></td>
                    <td>
                        <a href="editar.php?id=<?= $producto['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar.php?id=<?= $producto['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>
