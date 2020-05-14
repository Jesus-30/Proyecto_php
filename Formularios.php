<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Semana 01</title>
</head>
<body>
    <h1>Estamos en Formularios</h1>
    <hr>
    <a href="Index.php">Index</a>
    <a href="Varibales.php">Variables</a>
    <a href="Operaciones.php">Operaciones</a>
    <a href="Formularios.php">Envio de datos</a>
    <br>
    <br>
    <form action="Capturar.php" method="Post">
       <label for="nombre">Nombre: </label>
       <input type="text" name="nombre" id="nombre">
    <br>
    <br>
       <label for="apellido">Apellido: </label>
       <input type="text" name="apellido" id="apellido">
    <br>
    <br>
       <input type="submit" value="Enviar">
    </form>
</body>
</html>