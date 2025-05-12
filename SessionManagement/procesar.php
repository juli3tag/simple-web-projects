<?php

/* Gonzalez Julieta 🌷
    
    Descripcion: Ejercicio 1 - PHP
    Tema: Sesiones y formularios
    Objetivo: Crear un formulario que permita ingresar datos y guardarlos en una sesión. 
    
    Procesar el nombre ingresado en el formulario y redirigir a otro archivo donde se mostrarán los datos ingresados + el formulario para completar.

*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start(); // Iniciar la sesion

// Guardar nombre en la sesion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
        header('Location: archivo2.php'); // Redirigir a archivo2.php
        exit;
    } else {
        echo "Error: Nombre no proporcionado.";
        exit;
    }
} else {
    echo "Error: Método de solicitud no válido.";
    exit;
}

?>
