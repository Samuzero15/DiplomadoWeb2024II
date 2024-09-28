<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 8</title>
</head>
<body>
    <h1>Respuesta Ejercicio 8</h1>
    <?php
        /*Una empresa de bienes raíces ofrece casas de interés social, bajo las siguientes condiciones: Si los
ingresos del comprador son mayores de Bs. 8.000 o más el enganche será del 15% del costo de la casa y
el resto se distribuirá en pagos mensuales, a pagar en diez años. Si los ingresos del comprador son menos
de Bs. 8.000 o igual el enganche será del 30% del costo de la casa y el resto se distribuirá en pagos
mensuales a pagar en 7 años. La empresa quiere obtener cuanto debe pagar un comprador por concepto
de enganche y cuanto por cada pago parcial. */
        if(strlen($_POST["ingresos"]) == 0){
            echo("<p>Ingrese los ingresos del cliente.</p>");
            die();
        }
        $ingresos = $_POST["ingresos"];
        $porcentaje_enganche = 30;
        $años_a_pagar = 7;
        $cuota_mensual = 0;
        if($ingresos >= 8000){
            $porcentaje_enganche = 15;
            $años_a_pagar = 10;
        }
        $precio_enganche = $ingresos * ($porcentaje_enganche/100);
        $cuota_mensual = ($ingresos - $precio_enganche) /(12*$años_a_pagar);
    ?>

    <p> Ingresos: <b>Bs.F <?php echo($ingresos);?></b></p>
    <p> ¿Ingresos mayores a Bs.F 8000?: <b><?php echo($ingresos >= 8000 ? "Si" : "No"); ?></b></p>
    <p> Porcentaje de Enganche: <b><?php echo($porcentaje_enganche);?>%</b></p>
    <p> Años a pagar: <b><?php echo($años_a_pagar); ?> Años.</b></p>
    <p> Precio de Enganche: <b>Bs.F <?php echo($precio_enganche);?></b></p>
    <p> Cuota Mensual: <b>Bs.F <?php echo($cuota_mensual);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio8.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>