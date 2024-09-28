<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 4</title>
</head>
<body>
    <h1>Respuesta Ejercicio 4</h1>
    <?php
        /*Calcular el número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio
    aeróbico; la formula que se aplica cuando el sexo es femenino es: • número pulsaciones = (220 - edad) /
    10 y si el sexo es masculino: • número pulsaciones = (210 - edad) / 10. */
        if(strlen($_POST["edad"]) == 0){
            echo("<p>Ingrese la edad.</p>");
            die();
        }
        if(!isset($_POST["sexo"])){
            echo("<p>Seleccione el genero.</p>");
            die();
        }
        $edad = $_POST["edad"];
        $genero = $_POST["sexo"];
        $pulsaciones = (220 - $edad) / 10;
        if($genero == "M") $pulsaciones = (210 - $edad) / 10;
    ?>

    <p> Genero: <b><?php echo($genero == "M" ? "Masculino" : "Femenino");?></b></p>
    <p> Edad: <b><?php echo($edad); ?></b> Años</p>
    <p> Numero de Pulsaciones: <b><?php echo($pulsaciones);?></b> Pulsaciones.</p>

    <nav>
        <ul>
            <li><a href="ejercicio4.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>