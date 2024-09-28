<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 3</title>
</head>
<body>
    <h1>Respuesta Ejercicio 3</h1>
    <?php
        /*Calcular el total que una persona debe pagar en una cauchera, si el precio de cada caucho es de BsF 800
    si se compran menos de 5 cauchos y de Bs. 700 si se compran 5 o más. */
        if(strlen($_POST["num_cauchos"]) == 0){
            echo("<p>Ingrese una cantidad de cauchos</p>");
            die();
        }
        $num_cauchos = $_POST["num_cauchos"];
        $precio_cauchos = 800;

        if($num_cauchos >= 5){
            $precio_cauchos = 700;
        }
        $total_a_pagar = $num_cauchos*$precio_cauchos;
    ?>

    <p> Cantidad de cauchos: <b><?php echo($num_cauchos);?> Cauchos</b></p>
    <p> ¿Son 5 o más cauchos?: <b><?php echo($num_cauchos >= 5 ? "Si" : "No"); ?></b></p>
    <p> Precio por cacucho: <b>BsF. <?php echo($precio_cauchos);?></b></p>
    <p> Total a Pagar: <b>BsF. <?php echo($total_a_pagar);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio3.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>