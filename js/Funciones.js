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
                $('#solicitud_id').val(data);
                listarDetalleSolicitud();
            }
        });
    }
});

function consultarPrecio(servicio_id){
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

function eliminarDetalle(detalleSolicitud_id){
    //No se pudo cambiar el idioma daba error
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {

        if (result.isConfirmed) {
            //Eliminacion del detalle
            let formData = new FormData(); //Se usa para solicitar el formulario
            formData.append('detalleSolicitud_id',detalleSolicitud_id);
            $.ajax({
                type:'POST',
                url:'Index.php?c=Solicitud&accion=eliminarDetalleSolicitud&peticionAjax', //De donde viene la petición
                data:formData,
                contentType:false,
                processData:false,
                success: function (response){
                    console.log(response);
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    listarDetalleSolicitud();
                }
            });
          
        }
    })
}

