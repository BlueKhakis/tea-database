Make new list

<select name = "type_id">
@foreach ($types as $type)
            <option value = {{$type->id}}> {{$type->name}}</option>
            @endforeach
</select>

