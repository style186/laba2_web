<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61м</title>
    <style> .is-invalid { color: red; }   </style>
</head>
<body>
<h2>Добавление мест</h2>
<form method="post" action="{{url('seat')}}">
    @csrf
    <label>Номер ряда</label>
    <input type="integer" name="row_num" value="{{ old('row_num') }}"/>
    @error('row_num')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Номер кресла</label>
    <input type="integer" name="seat_num" value="{{ old('seat_num') }}"/>
    @error('seat_num')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Ценовая категория</label>
    <input type="string" name="price_category" maxlength="100" value="{{ old('price_category') }}"/>
    @error('price_category')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Зал:</label>
    <select name="hall_id" value="{{ old('hall_id') }}">
        <option style="...">
        @foreach ($halls as $hall)
            <option value="{{$hall->id}}"
                    @if(old('hall_id') == $hall->id) selected
                @endif>{{$hall->name_hall}}
            </option>
        @endforeach
    </select>
    @error('hall_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <input type="submit">
</form>
</body>
</html>
