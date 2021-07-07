<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final project</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/homepage.css">

    

    
</head>
<body>

    <header>
        @include('navigation.navigation')
    </header>

        
    @yield('content')

    <footer>
  
</footer>
 <script src="{{asset('js\search.js')}}"></script>
</body>


</html>