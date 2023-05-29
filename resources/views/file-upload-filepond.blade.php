<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 

    <title>File Upload with Filepond</title>
    
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
   


    @livewireStyles
</head>
<body>
    @livewire('file-upload')
    


    @livewireScripts

    @yield('script')
</body>
</html>

<script>
    window.addEventListener('msg', event=> {
        Swal.fire(
        'Your Post Has been created successfully!.',
        'success'
        )   
    })
</script>


             
            

