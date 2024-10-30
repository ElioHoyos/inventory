<?php
//invocar o llamar a la conexion
require_once "conexion.php";
class ModeloCategoria{
    // Crear o registrar categoria
    public static function mdlIngresarCategoria($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES(:nombre)");
        $stmt->bindParam(":nombre", $datos, PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt = null;
    }

    // Mostrar las categorias
    public static function mdlMostrarCategoria($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt->fetchAll();
        }
        $stmt -> close();
        $stmt = null;
    }

    // Editar Categoria Modelo
    public static function mdlEditarCategoria($tabla,$datos){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");
        $stmt->bindParam(":nombre",$datos["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt = null;
    }
}