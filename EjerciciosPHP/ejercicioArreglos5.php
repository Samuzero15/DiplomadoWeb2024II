
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 de arreglos</title>
</head>
<body>
    <h1>Ejercicio 5 de Arrelgos</h1>
    <p>5. En una empresa se requiere calcular el salario semanal de cada uno de los n obreros que laboran en ella. <br>
     Los nombres están en un arreglo y Las horas están en otro. (Arreglos paralelas) <br>
     El salario se obtiene de la siguiente forma: 
    <ul>
        <li> Si el obrero trabaja 40 horas o menos se le paga Bs. 20 por hora. </li>
        <li> Si trabaja más de 40 horas se le paga Bs. 20 por cada una de las primeras 40 horas y Bs. 25 por cada hora extra. </li>
    </ul>
Imprime el nombre de cada trabajador y cuánto va a cobrar.</p>
    <?php
        $nombres = array("Pepe", "Juan", "Alonzo"); 
        $horas = array(40,60,25); 

        for($i = 0; $i < sizeof($nombres); $i++){
            $pago = 0;
            if($horas[$i] > 40){
                $pago = (40 * 20) + (($horas[$i]-40) * 25);
            }else {
                $pago = $horas[$i] * 20;
            }
            echo("<p>Para el trabajador <b>".$nombres[$i]."</b>, por las <b>".$horas[$i]."</b>, se le paga <b>".$pago."</b>$</p>");
        }
    ?>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>


