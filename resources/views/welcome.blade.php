<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    @livewireStyles
    <title>laravel-FPA</title>
</head>
<body>
 <!-- @livewire('companies')  -->
    <!-- @livewire('posts',[
        'post_id' => \App\Models\Vote::find('post_id'),
        'vote' => \App\Models\Vote::find('vote')
        ]) -->

    <!-- @livewire('add-product') -->

    @livewire('multi-step')


    @livewireScripts
</body>
</html>