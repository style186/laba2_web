<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61м</title>
</head>
<body>
    <h2>Список мест</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Номер ряда</td>
            <td>Номер кресла</td>
            <td>Ценовая категория</td>
            <td>Зал</td>
            <td>Действия</td>
        </thead>
        @foreach ($seats as $seat)
            <tr>
                <td>{{$seat->id}}</td>
                <td>{{$seat->row_num}}</td>
                <td>{{$seat->seat_num}}</td>
                <td>{{$seat->price_category}}</td>
                <td>{{$seat->HALLS->name_hall}}</td>
                <td><a href="{{url('seat/destroy/'.$seat->id)}}">Удалить</a>
                    <a href="{{url('seat/edit/'.$seat->id)}}">Редактировать</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
