<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 5</title>
</head>
<body>
    <h1>Respuesta Ejercicio 5</h1>
    <?php
        /*Una compañía de seguros esta abriendo un departamento de finanzas y estableció un programa para
captar clientes, que consiste en lo siguiente: Si el monto por el que se efectúa la fianza es menor que Bs.
50.000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que Bs. 50.000 la cuota a pagar
será el 2% del monto. La afianzadora desea determinar cual será la cuota que debe pagar un cliente. */
        if(strlen($_POST["monto_total"]) == 0){
            echo("<p>Ingrese el monto total.</p>");
            die();
        }
        $monto_total = $_POST["monto_total"];
        $porcentaje = 2;
        if($monto_total <= 50000) $porcentaje = 3;
        $cuota_a_pagar = $monto_total * ($porcentaje/100);
    ?>

    <p> Monto Total: <b>Bs.F <?php echo($monto_total);?></b></p>
    <p> Porcentaje de Cuota: <b><?php echo($porcentaje); ?>%</b></p>
    <p> Cuota a pagar: <b>Bs.F <?php echo($cuota_a_pagar);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio5.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>