<?php 
class ControladorCategoria{
    // Crear o insertar categorias
    public static function ctrCrearCategoria(){
        if(isset($_POST["nuevaCategoria"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){
                $tabla = "categorias";
                $datos = $_POST["nuevaCategoria"];
                $respuesta = ModeloCategoria::mdlIngresarCategoria($tabla,$datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                        type: "success",
                        title: "La categoria ha sido registrado correctamente",
                        showConfirmButton: true,
                        confirmButtonText: "cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "categoria";
                            }
                        })
                    </script>';
                }
            }else{
                echo '<script>
                    swal({
                        type: "error",
                        title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
                        showConfirmButton: true,
                        confirmButtonText: "cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "categoria"
                            }
                        })
                </script>';
            }
        }
    }

    // Mostrar Categorias
    public static function ctrMostrarCategoria($item, $valor){
        // nombre de la tabla de bd
        $tabla = "categorias";
        $respuesta = ModeloCategoria::mdlMostrarCategoria($tabla,$item,$valor);
        return $respuesta;
    }

    // Editar categorias
    public static function ctrEditarCategoria(){
        if(isset($_POST["editarCategoria"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"])){
                $tabla = "categorias";
                $datos = array("nombre"=>$_POST["editarCategoria"],
                              "id"=>$_POST["idCategoria"]);
                $respuesta = ModeloCategoria::mdlEditarCategoria($tabla,$datos);
                if($respuesta == "ok"){
                    echo '<script>
                        swal({
                            type: "success",
                            "title": "¡La Categoría ha sido cambiada correctamente!",
                            showConfirmButton: true,
                            confirmButton: "cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "categoria";
                            }
                        })
                    </script>';
                }
            }else{
                echo '<script>
                    swal({
                            type: "error",
                            "title": "¡La Categoría no puede ir vacía o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButton: "cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "categoria";
                            }
                        })
                </script>';
            }
        }
    }
}