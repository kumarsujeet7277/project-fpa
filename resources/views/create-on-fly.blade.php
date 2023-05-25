<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 

    <title>Dropdown Option: Dynamic "On-the-fly"</title>
    
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @livewire('create-fly')
    


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>
</html>
<script>
      window.addEventListener('create-message', event=> {
        Swal.fire(
        'Your Product Has been created successfully!.',
        'success'
        )   
    })
</script>

<script>
      window.addEventListener('category-create-msg', event=> {
        Swal.fire(
        'Your Product Has been created successfully!.',
        'success'
        )   
    })
</script>