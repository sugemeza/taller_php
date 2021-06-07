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

/*function eliminarCategoria(categoria_id){
    Swal.fire({
        title: '¿Seguro de borrar esta categoría?',
        text: "¡No podras revertirlo!",
        icon: 'Alerta',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borrarla!'

      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Cancelar!',
            '¡La categría fue borrada!.',
            'Éxito'
          )
        }
      })
}
function eliminarServicio(){
  Swal.fire({
      title: '¿Seguro de borrar esta categoría?',
      text: "¡No podras revertirlo!",
      icon: 'Alerta',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si, borrarla!'

    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Cancelar!',
          '¡La categría fue borrada!.',
          'Éxito'
        )
      }
    })
}*/