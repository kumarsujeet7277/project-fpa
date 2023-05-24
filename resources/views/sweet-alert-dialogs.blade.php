<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 

    <title>Sweet Alert Dialogs</title>
    
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    @livewireStyles
</head>
<body>
    @livewire('sweet-alert')
    


    @livewireScripts
  
    @yield('script')
</body>
</html>

<script>
    window.addEventListener('show-delete-confirmation', event => {
                            const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        
                        livewire.emit('deleteConfirmed')


                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                        )
                    }
                    })
    })


    window.addEventListener('deleted', event => {
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )   
    })


</script>
<script>
    window.addEventListener('create-message', event=> {
        Swal.fire(
        'Your Post Has been created successfully!.',
        'success'
        )   
    })
</script>



             
            

