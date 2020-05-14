<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Operaciones</title>
</head>
<body>
    <h1>Estamos en Operaciones</h1>
    <hr>
    <a href="Index.php">Index</a>
    <a href="Variables.php">Variables</a>
    <a href="Operaciones.php">Operaciones</a>
    <a href="Formularios.php">Envio de datos</a>
    
    <!--Nomenclatura para Script php-->
    <?php
    # Valores
    $numero01 = 10.5;
    $numero02 = 5;

    echo"<h3>Suma</h3>";
    $suma = $numero01 + $numero02;
    echo "La sumatoria del número $numero01 más $numero02 es de: $suma";

    echo"<h3>Resta</h3>";
    $resta = $numero01 - $numero02;
    echo"La Diferencia del número $numero01 y el $numero02 es de: $resta";

    echo"<h3>Multiplicación</h3>";
    $multi = $numero01 * $numero02;
    echo"La multiplicación del número $numero01 y el $numero02 es de: $multi";

    echo"<h3>División</h3>";
    $div = $numero01 / $numero02;
    echo"La Divivión del número $numero01 y el $numero02 es de: $div";

    echo"<h3>Potencia y aproximación</h3>";
    $potencia = number_format(pow($numero01, $numero02), 2, '.' , ',');
    echo"La potencia de $numero01 con exponente $numero02 es de: $potencia";

    ?>
</body>
</html>