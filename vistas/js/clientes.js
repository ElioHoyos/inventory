/// buscar en api sunat
function buscarDocuemnto(){
    let documento=$("#nuevoDocumentoId").val();
    let tipodocumento=$("#tipo_documento").val();
    let urlapiconsulta="consultadni.php";
    if(tipodocumento=="DNI"){
     urlapiconsulta="../consulta/consultadni.php";
    }else if(tipodocumento=="RUC"){
        urlapiconsulta="consultaruc.php";
    }else{
        alert("documento no encontra con extranjeria , escribir datos manualmente");
        return false;
    }
    $.post("../"+urlapiconsulta,{documento : documento}, function(data, status)
    {
        res = JSON.parse(data); 
        $("#nuevoCliente").val("");
        $("#nuevaDireccion").val("");
        //console.log(res);
        if(res.codigo==0 || res.codigo==-1) {
            alert(res.mensaje);
        }else if(res.codigo==1){
            if(tipodocumento=="DNI"){
                $("#nombre").val(res.data.nombres+' '+res.data.apellidoPaterno+' '+res.data.apellidoMaterno);
            }else{
                $("#nombre").val(res.data.nombre);
            }
            $("#nuevaDireccion").val(res.data.nuevaDireccion);
        }
        
    })
}