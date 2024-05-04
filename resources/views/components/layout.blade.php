<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chirper</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
{{-- google font per index-chirp --}}
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>

    <x-navbar/>

    {{$slot}}

</body>
</html>