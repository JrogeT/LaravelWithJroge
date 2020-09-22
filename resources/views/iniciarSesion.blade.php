<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    iniciar session <br>
    <form action="/verificarLogin" method="post">
        @csrf
        Usuario: <input type="text" name="usuario" id=""> <br>
        Contraseña: <input type="password" name="contra" id=""><br>
        <input type="submit" value="Iniciar sesion">
    </form>
    @if(session()->has('mensaje'))
        {{ session()->get('mensaje') }}
    @endif
</body>
</html>