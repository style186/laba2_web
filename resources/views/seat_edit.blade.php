<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61m</title>
    <style> .is-invalid { color: red; }   </style>
</head>
<body>
<h2>Редактирование места</h2>
<form method="post" action="{{url('seat/update/'.$seat->id)}}"/>
    @csrf
    <label>Номер ряда</label>
    <input type="integer" name="row_num" value="@if (old('row_num')) {{old('row_num')}} @else {{$seat->row_num}} @endif " />
    @error('row_num')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Номер кресла</label>
    <input type="integer" name="seat_num" value="@if (old('seat_num')) {{old('seat_num')}} @else {{$seat->seat_num}} @endif " />
    @error('seat_num')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Ценовая категория</label>
    <input type="string" name="price_category" maxlength="100" value="@if (old('price_category')) {{old('price_category')}} @else {{$seat->price_category}} @endif "/>
    @error('price_category')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>

    <label>Зал:</label>
    <select name="hall_id" value="{{ old('hall_id') }}">
        <option style="...">
        @foreach ($halls as $hall)
            <option value="{{$hall->id}}"
                @if(old('hall_id'))
                    @if(old('hall_id')== $hall->id) selected @endif
                @else
                    @if($seat->hall_id == $hall->id) selected @endif
                @endif >{{$hall->name_hall}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <input type="submit">
</form>
</body>
</html>