
function fntDelPersona(idUsuario){ 
Swal.fire({
    title: '¿Realmente quiere eliminar el registro?',
    text: "",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Eliminar',
    cancelButtonText: 'Cancelar'

    
  }).then((result) => {
    if (result.isConfirmed) {
     
      Swal.fire(
        'Eliminado',
        'Se elimino el usuario',
        'success'
      )
      location.href='index.php?c=usuarios&a=eliminar&idUsuario='+idUsuario;
    }else{
        
        Swal.fire(
            'Cancelado',
            'El usuario no se elimino',
            'succes'
        )
       
    }
     
  })
 }


function fntDelPersona1(idUsuario){ 

    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    
    })

        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true,
        timer:10000,
        }).then((result) => {
        if (result.isConfirmed) {

            alerta=true
            swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success',
            
            )
           
          // location.href='index.php?c=usuarios&a=eliminar&idUsuario='+idUsuario

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel     
        ) {
            alerta=false
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error',  
          
            );
         
            //location.href="index.php";
        }
        })

        if(alerta==true){
            location.href='index.php?c=usuarios&a=eliminar&idUsuario='+idUsuario
        }else{
            location.href='index.php'
        }

}