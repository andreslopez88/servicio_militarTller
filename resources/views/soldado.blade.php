<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soidier</title>
</head>
<body>
    <form action="{{route('store.soldado')}}" method="POST">
        @csrf
        <label>
            Ingrese el nombre del soldado:
            <br>
            <input type="text" name="nombre">
        </label>
        <br><br>
        <label>
            Ingrese los apellidos del soldado:
            <br>
            <input type="text" name="apellidos">
        </label>

        <label>
        Ingrese el grado del soldado:
        <br>
        <input type="text" name="grado">  
    </label>
    <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
