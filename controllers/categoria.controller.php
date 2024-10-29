<?php 
class ControladorCategoria{
    // Crear o insertar categorias
    public static function ctrCrearCategoria(){

    }

    // Mostrar Categorias
    public static function ctrMostrarCategoria($item, $valor){
        // nombre de la tabla de bd
        $tabla = "categorias";
        $respuesta = ModeloCategoria::mdlMostrarCategoria($tabla,$item,$valor);
        return $respuesta;
    }
}