<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js' , 'resources/css/app.css'])
    <title>Nuovo Blog</title>
</head>
<body>

    <x-navbar />
    <x-header header="{{$header}}" />
   
        {{$slot}}

    <x-footer />
</body>
</html>