<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final project</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    
</head>
<body>

    <header>
        @include('navigation.navigation')
    </header>

        
    @yield('content')

    <footer>
       
    </footer>
 <script src="{{asset('js\search.js')}}"></script>
 <script src="{{asset('js\reviews.js')}}"></script>
</body>


</html>