<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RESPUESTA DEL FORMULARIO</h1>
    <?php
    echo "el nombre es ".$_POST["nombre"]."</br>";
    echo "el apellido es " .$_POST["apellido"]."</br>"; 
    echo "el usuario es " .$_POST["user"]."</br>";
   // echo "el nombr con variable php es " .$name;
    ?>

    <a id="inicio" href="/index">HOME</a><br>
    <a href='/mostrarNombre/{{ $nombre }}'>ruta con parametro obligatorios</a>
    
</body>
</html>