<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reviews</h1>

    <?php
    use App\Models\Tea;
    ?>

    <ul>
    @foreach ($reviews as $review)
    @if ($review->user_id === Auth::user()->id)
    <?php $tea = Tea::where('id', $review->tea_id)->get(); ?>
    <li><a href="/show/{{$review->tea_id}}">{{$tea[0]->name}}</a></li>
    @endif
    @endforeach
    </ul>
</body>
</html>