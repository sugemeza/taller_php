function eliminarCategoria(categoria){
  if(confirm("¿Desea borrar la categoría? " + categoria)){
   document.frmEliminar.submit();
  }
}
function eliminarServicio(servicio){
  if(confirm("¿Desea borrar la servicio? " + servicio)){
   document.frmEliminar.submit();
  }
}

$('#frmSolicitud').submit(function (event){
    event.preventDefault();

    if($('#servicios').val()==""){
        alert("Debe seleccionar un servicios");
    }
    else {
        $.ajax({
            type:'POST', //Tipo de petición
            url:'Index.php?c=Solicitud&accion=guardar&peticionAjax', //De donde viene la petición
            data:$('#frmSolicitud').serialize(),//Parametros del formulario
            success: function (data){
                console.log(data); //Informacion que nos retorna el formulario
                $('#solicitud_id').val(data);
                listarDetalleSolicitud();
            }
        });
    }
});

function consultarPrecio(servicio_id){
    console.log(servicio_id);
    let formData = new FormData(); //Se usa para solicitar el formulario
    formData.append('servicio',servicio_id);
    $.ajax({
        type:'POST', //Tipo de petición
        url:'Index.php?c=Servicio&accion=ConsultarPrecio&peticionAjax', //De donde viene la petición
        data:formData,
        contentType:false,
        processData:false,
        success: function (response){
            $('#precioUnitario').val(response);
        }
    });
}

function listarDetalleSolicitud(){
    console.log('form here', $('#solicitud_id').val());
    let formData = new FormData(); //Se usa para solicitar el formulario
    formData.append('solicitud_id', $('#solicitud_id').val());
    $.ajax({
        type:'POST', //Tipo de petición
        url:'Index.php?c=Solicitud&accion=listarDetalleSolicitud&peticionAjax', //De donde viene la petición
        data:formData,
        contentType:false,
        processData:false,
        success: function(response){
            //Imprimir registros
            document.getElementById('detalleSolicitud').innerHTML = response;   
        }
    });    
}

function calcularValorDetalle(){
    $('#precioTotal').val($('#precioUnitario').val()*$('#cantidad').val());
}


