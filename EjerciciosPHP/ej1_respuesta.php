<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 1</title>
</head>
<body>
    <h1>Respuesta Ejercicio 1</h1>
    <?php
        /*En un supermercado se hace una promoción, mediante la cual el cliente obtiene un descuento
    dependiendo de un número que se escoge al azar del 1 al 100. Si el numero escogido es menor que 50 el
    descuento es del 15% sobre el total de la compra, si el numero está entre 50 y 80 el descuento es de 20%
    es mayor 80 el descuento es del 30%. Obtener cuanto dinero se le descuenta. */
        if(strlen($_POST["precio"]) == 0){
            echo("<p>Ingrese un precio</p>");
            die();
        }
        $precio_de_compra = $_POST["precio"];
        $num_aleatorio = rand(1, 100);
        $desc_porcentaje = 15;
        if($num_aleatorio >= 50 && $num_aleatorio <= 80){
            $desc_porcentaje = 20;
        }else if($num_aleatorio > 80){
            $desc_porcentaje = 30;
        }
        $descuento = $precio_de_compra * ($desc_porcentaje/100);
        $total = $precio_de_compra - $descuento;
    ?>

    <p> Para el total actual de <b>$<?php echo($precio_de_compra);?></b>, el descuento es de <b>$<?php echo($descuento); ?></b> con un <b><?php echo($desc_porcentaje);?></b>%, El total a pagar <b>$<?php echo($total); ?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio1.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>