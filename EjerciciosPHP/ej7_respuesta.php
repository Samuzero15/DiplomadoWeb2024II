<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 7</title>
</head>
<body>
    <h1>Respuesta Ejercicio 7</h1>
    <?php
        /*Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el
promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento
del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar
la colegiatura completa, la cual incluye el 10% de IVA. Obtener cuanto debe pagar un alumno. */
        if(strlen($_POST["costo"]) == 0){
            echo("<p>Ingrese el costo de la colegiatura.</p>");
            die();
        }
        if(strlen($_POST["promedio"]) == 0){
            echo("<p>Ingrese el promedio del alumno.</p>");
            die();
        }
        $costo = $_POST["costo"];
        $promedio = $_POST["promedio"];
        $total = $costo + ($costo * (10/100));
        if($promedio >= 9){
            $total = $costo - ($costo * (30/100));
        }
    ?>

    <p> Costo de Colegiatura: <b>Bs.F <?php echo($costo);?></b></p>
    <p> Promedio del estudiante: <b><?php echo($promedio); ?> Puntos.</b></p>
    <p> ¿Es Posible el descuento?: <b><?php echo($promedio >= 9 ? "Si" : "No"); ?></b></p>
    <p> Total a pagar: <b>Bs.F <?php echo($total);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio7.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>