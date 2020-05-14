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
    <h1>Introducción a PHP</h1>
    <hr>
    <a href="Index.php">Index</a>
    <a href="Variables.php">Variables</a>
    <a href="Operaciones.php">Operaciones</a>
    <a href="Formularios.php">Envio de datos</a>
    <br>
    <br>
    <!--Nomenclatura Script de php-->
    <?php
    # Poo
    class Clase 
    {
        public function imprimir()
        {
            return print("<b style='color:red;'>Este es un metodo</b>");
        }
    }

    $objeto = new Clase();
    $objeto -> imprimir();
    ?>
</body>
</html>