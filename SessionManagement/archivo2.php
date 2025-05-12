<?php

/* Gonzalez Gutierrez Julieta Maiara
    Legajo: VINF014900
    Fecha de entrega: 07/04/2025
    Descripcion: Ejercicio 1 - PHP
    Tema: Sesiones y formularios
    Objetivo: Crear un formulario que permita ingresar datos y guardarlos en una sesión. 
    
    Mostrar los datos ingresados en el formulario anterior y permitir completar el formulario para solicitar una plaza en Hogwarts.
*/

session_start();
$nombreGuardado = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Desconocido';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Mágico</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
  <div class="container mt-5 p-4 rounded shadow-lg bg-secondary">
    <h2 class="text-center mb-4">✨ ¡Hola, <?php echo htmlspecialchars($nombreGuardado); ?>!</h2>
    <p class="text-center">Completa el formulario para solicitar una plaza en Hogwarts.</p>

    <form method="POST" class="mt-4"> <!-- Formulario para ingresar los datos del estudiante -->
      <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($nombreGuardado); ?>"> <!-- Campo oculto para enviar el nombre guardado  -->

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Apellido:</label> 
          <input type="text" class="form-control" name="apellido" required> <!-- Campo de entrada para el apellido -->
        </div>
        <div class="col-md-6">
          <label class="form-label">Edad:</label>
          <input type="number" class="form-control" name="edad" required> <!-- Campo de entrada para la edad -->
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" required> <!-- Campo de entrada para el email -->
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Teléfono:</label>
          <input type="text" class="form-control" name="telefono" required> <!-- Campo de entrada para el telefono -->
        </div>
        <div class="col-md-6">
          <label class="form-label">Dirección:</label>
          <input type="text" class="form-control" name="direccion" required> <!-- Campo de entrada para la direccion -->
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Ciudad:</label>
        <input type="text" class="form-control" name="ciudad" required> <!-- Campo de entrada para la ciudad -->
      </div>

      <div class="mb-3">
        <label class="form-label">Casa de Hogwarts:</label>
        <select class="form-select" name="casa" required> <!-- Campo de selección para la casa -->
          <option value="" disabled selected>Selecciona una casa</option> 
          <option value="Gryffindor">🦁 Gryffindor</option>
          <option value="Hufflepuff">🦡 Hufflepuff</option>
          <option value="Ravenclaw">🦅 Ravenclaw</option>
          <option value="Slytherin">🐍 Slytherin</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Mascota:</label>
        <input type="text" class="form-control" name="mascota" required> <!-- Campo de entrada para la mascota -->
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Solicitar</button> <!-- Botón para enviar el formulario -->
        <a href="archivo1.php" class="btn btn-outline-light">Volver al inicio</a> <!-- Botón para volver al inicio -->
      </div>
    </form>

    <?php
    // Mostrar los datos guardados si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        echo "<div class='mt-5 p-4 bg-dark rounded'>";
        echo "<h4 class='mb-3'>📜 Datos guardados con exito! Te enviaremos una lechuza pronto.</h4>";
        echo "<ul class='list-group'>";
        $datos = $_POST; // Recoger los datos del formulario
        $claves = array_keys($datos); // Obtener las claves del array

        for ($i = 0; $i < count($claves); $i++) { // Iterar sobre las claves
            $campo = ucfirst($claves[$i]); // Capitalizar la primera letra del campo
            $valor = htmlspecialchars($datos[$claves[$i]]); 
            echo "<li class='list-group-item bg-secondary text-light'><strong>$campo:</strong> $valor</li>"; // Mostrar los datos guardados
        }

        echo "</ul></div>"; // Cerrar la lista
    }
    ?>
  </div>
</body>
</html>