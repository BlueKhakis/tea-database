<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href='/'>Home</a>-><a href='/userpage'>User</a>->Lists
    <h1>Lists</h1>

    <ul>
    @foreach ($lists as $list)
    @if ($list->user_id === Auth::user()->id)
    <li><a href="/editlist/{{$list->id}}">{{$list->name}}</a></li>
    @endif
    @endforeach
    </ul>
</body>
</html>