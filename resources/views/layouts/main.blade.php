<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final project</title>
    <link rel="stylesheet" href="css/app.css">

    

    
</head>
<body>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>Logout</button>
    </form>

    <h1>Final project</h1>

    <main>

        <span>This is a massive Tea web application bitch</span>

    </main>

</body>
</html>