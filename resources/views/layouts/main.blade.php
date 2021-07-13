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
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    
</head>
<body>

    <header>
        @include('navigation.navigation')
    </header>

        <title>Final project</title>

        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/homepage.css')}}"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body class="document__body">

            <header>
                @include('navigation.navigation')
            </header>

            @yield('content')

            <footer>
                @include('footer.footer')
            </footer>
        
        <script src="{{asset('js\search.js')}}"></script>
        <script src="{{asset('js\reviews.js')}}"></script>
        <script src="{{asset('js\animation/animation.js')}}"></script>
    </body>


</html>