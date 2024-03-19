<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicio</title>
</head>
<body>
    <form action="{{route('store.servicio')}}" method="POST">
        @csrf
        <input type="text" placeholder ="Guardia" name="fecha_realizacion">
        <button type="submit">Enviar</button>

</body>
</html>