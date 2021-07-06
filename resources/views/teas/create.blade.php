@extends('layouts.main')
@section('content')
    


@if (Auth::user())
    

    


<form method='post' action="{{action('TeaController@store')}}">
    @csrf
        Name
    <input type="text" name='name'>
<br>
    Type
<select name = "type_id">
@foreach ($types as $type)
            <option value = {{$type->id}}> {{$type->name}}</option>
            @endforeach
</select>
<br>
    Brands
<select name = "brand_id">
@foreach ($brands as $brand)
            <option value = {{$brand->id}}> {{$brand->name}}</option>
            @endforeach
</select>
<br>
    Countries
<select name = "country_id">
@foreach ($countries as $countries)
            <option value = {{$countries->id}}> {{$countries->name}}</option>
            @endforeach
</select>
<br>
    Plantations
<select name = "plantation_id">
@foreach ($plantations as $plantation)
            <option value = {{$plantation->id}}> {{$plantation->name}}</option>
            @endforeach
</select>

<input type="hidden" name="average_rating" value=0>


<input type="submit">

</form>

@else <span>Need to be login</span>

@endif

@if (session('status'))
{{session('status')}}
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection