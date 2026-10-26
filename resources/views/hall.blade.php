<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61m</title>
</head>
<body>
    <h2>{{$hall? "Сеансы в зале ".$hall->name_hall: 'Неверный ID'}}</h2>
    @if($hall)
    <table border="1">    
        <thread>
            <td>ID Сеанса</td>
            <td>ID фильма</td>
            <td>Время и дата начала сеанса</td>
        <thread>
    @foreach ($hall->SESSIONS as $session)
        <tr>
            <td>{{$session->id}}</td>
            <td>{{$session->movie_id}}</td>
            <td>{{$session->start_time_date}}</td>
        <tr>
    @endforeach
    </table>
    @endif
</body>
</html>