<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    <title>Buat peta dasar dengan google map API</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- style sendiri --}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">


   

</head>
<body>
        
    @yield("content")

    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

   
</body>

<footer>

</footer>
</html>
