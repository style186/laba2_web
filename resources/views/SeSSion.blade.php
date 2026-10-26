<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61m</title>
</head>
<body>
    <h2>{{$SeSSion? "Все сеансы ": 'Сеансов нет'}}</h2>
    @if($SeSSion)
    <table border="1">    
        <thread>
            <td>ID Сеанса</td>
            <td>ID фильма</td>
            <td>Время и дата начала сеанса</td>
            <td>Зал</td>
        <thread>
    @foreach ($SeSSion as $session)
        <tr>
            <td>{{$session->id}}</td>
            <td>{{$session->movie_id}}</td>
            <td>{{$session->start_time_date}}</td>
            <td>{{$session->HALLS->name_hall}}</td>
        <tr>
    @endforeach
    </table>
    @endif
</body>
</html>