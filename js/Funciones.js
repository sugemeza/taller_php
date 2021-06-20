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

            success: function (data)
            {
                console.log(data); //Informacion que nos retorna el formulario
            }
        });
    }
});

function consultarPrecios(servicio_id){
    console.log(servicio_id);
}
