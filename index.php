<?php
//invocar al archivo
require_once "controllers/plantilla.controlador.php";
require_once "controllers/categoria.controller.php";

// models
require_once "models/categorias.model.php";

//instancia al controlador
$plantilla = new PlantillaControlador();
$plantilla->plantilla();
