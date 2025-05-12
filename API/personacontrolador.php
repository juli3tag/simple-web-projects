<?php

/*  Gonzalez Gutierrez Julieta Maiara
    Legajo: VINF014900
    Fecha de entrega: 05/05/2025
    Descripcion: Controlador para manejar la lógica de negocio de la API
    */

require_once 'persona.php';

class PersonaControlador {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function obtenerJSON($id) {
        $personaModelo = new Persona($this->db);
        $datos = $personaModelo->obtenerPorId($id);
        if ($datos) {
            header('Content-Type: application/json');
            echo json_encode($datos);
        } else {
            http_response_code(404);
            echo json_encode(array("mensaje" => "Persona no encontrada"));
        }
    }
}
        