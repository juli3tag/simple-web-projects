<?php

/* Gonzalez Julieta 🌷
    
    Tema: Sesiones y formularios
    Objetivo: Crear un formulario que permita ingresar datos y guardarlos en una sesión. 
    Luego, redirigir a otro archivo donde se mostrarán los datos ingresados.
    Se utilizará Bootstrap para el diseño.
    Se utilizará un formulario para ingresar el nombre y luego se redirigirá a otro formulario para completar los datos.
    */

session_start(); // Iniciar la sesion
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingreso a Hogwarts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Enlace a Bootstrap para estilos -->
</head>

<body class="bg-dark text-light"> 
  <div class="container mt-5 p-4 rounded shadow-lg bg-secondary">
    <h2 class="mb-4 text-center">🪄 ¡Bienvenido al colegio Hogwarts de Magia y Hechiceria 🦉📰!</h2>
    <p class="text-center">Para ingresar, por favor introduce tu nombre.</p>

    <form action="procesar.php" method="POST" class="mt-4">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label> <!-- Etiqueta para el campo de nombre -->
        <input type="text" class="form-control" id="nombre" name="nombre" required> <!-- Campo de entrada para el nombre -->
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-warning text-dark">Continuar</button> <!-- Botón para enviar el formulario -->
      </div>
    </form>
  </div>
</body>
</html>
