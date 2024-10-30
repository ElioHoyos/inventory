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
                        position: "top-end",
                        type: "success",
                        timer: 1500,
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
        
    }
}