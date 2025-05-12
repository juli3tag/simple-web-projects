<?php

/*  Gonzalez Gutierrez Julieta Maiara 🌷
    
    Descripcion: Script principal para manejar la consulta de datos de una persona en la base de datos
    Este script recibe un ID a través de la URL y devuelve los datos de la persona en formato JSON.
    */

require_once 'conectar.php';
require_once 'personacontrolador.php';

// Obtener las ID desde la URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$db = (new Database())->connect();
$controlador = new PersonaControlador($db);
$controlador->obtenerJSON($id);
?>
