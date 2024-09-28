<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 2</title>
</head>
<body>
    <h1>Respuesta Ejercicio 2</h1>
    <?php
        /*Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o
mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un
descuento del 10%. */
        if(strlen($_POST["total"]) == 0){
            echo("<p>Ingrese el total a pagar</p>");
            die();
        }
        if(strlen($_POST["num_camisas"]) == 0){
            echo("<p>Ingrese el numero de camisas</p>");
            die();
        }
        $total = $_POST["total"];
        $num_camisas = $_POST["num_camisas"];
       
        $desc_porcentaje = 20;
        if($num_camisas < 3){
            $desc_porcentaje = 10;
        }

        $descuento = $total * ($desc_porcentaje/100);
        $total_a_pagar = $total - $descuento;
    ?>
    <p> El subtotal ingresado es: <b>$<?php echo($total);?></b></p>
    <p> Cantidad de camisas: <b><?php echo($num_camisas);?> Camisas</b></p>
    <p> Porcentaje de descuento: <b><?php echo($desc_porcentaje);?>%</b></p>
    <p> Se descuentan:  <b>$<?php echo($descuento);?></b></p>
    <p> El total a pagar es: <b>$<?php echo($total_a_pagar);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio2.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>