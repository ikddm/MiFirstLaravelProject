<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form" method="post">
        @csrf
        <p>Nombre: <input type="text" name=" nombre"></p>
        <p>Apellido: <input type="text" name="apellido"></p>
        <p>Edad: <input type="number" name="edad"></p>
        <p>Telefono: <input type="number" name="telefono"></p>
        <input type="submit" value="enviar">
 
    <form action="/user/" method="get">
        <p>Usuario: <input type="text" name="user"></p>
        <input type="submit" value="enviar">
    </form>

</body>
</html>