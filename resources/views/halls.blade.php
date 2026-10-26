<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-61m</title>
</head>
<body>
    <h2>Таблица Залов</h2>
    <table border="1">
        <thread>
            <td>id</td>
            <td>Наименование</td>
        <thread>
    @foreach ($halls as $hall)
        <tr>
            <td>{{$hall->id}}</td>
            <td>{{$hall->name_hall}}</td>
        <tr>
    @endforeach
    </table>
</body>
</html>