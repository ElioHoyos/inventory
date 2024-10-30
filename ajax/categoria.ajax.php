<?php 
// llamar al controlador y al modelo
require_once "../controllers/categoria.controller.php";
require_once "../models/categorias.model.php";

class AjaxCategoria{
    // Editar Categoria
    public $idCategoria;
    public function ajaxEditarCategoria(){
        $item = "id";
        $valor = $this->idCategoria;
        $respuesta = ControladorCategoria::ctrEditarCategoria($item,$valor);
        echo json_encode($respuesta);
    }
}

if(isset($_POST["idCategoria"])){
    $categoria = new AjaxCategoria();
    $categoria->idCategoria = $_POST["idCategoria"];
    $categoria->ajaxEditarCategoria();
}