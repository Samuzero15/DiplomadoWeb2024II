
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 de Arrelgos</title>
</head>
<body>
    <h1>Ejercicio 1 de Arrelgos</h1>
    <p>1- Dado 20 números en un arreglo, imprimir cuantos son positivos, cuantos negativos y cuantos neutros.</p>
    <?php

        $arreglo = array();
        for($i = 0; $i < 20; $i++){
            array_push($arreglo, rand(-20, 20));
        }
        
        $lista_nums = "";
        $positivos = 0;
        $negativos = 0;
        $neutros = 0;

        foreach($arreglo as $num){
            if($num > 0) $positivos++;
            else if($num < 0) $negativos++;
            else $neutros ++;
            $lista_nums .= $num." ";
        }

        echo("<p><b>Arreglo: </b> [".$lista_nums."]</p>");
        echo("<p><b>Positivos: </b>".$positivos." Numeros.</p>");
        echo("<p><b>Negativos: </b>".$negativos." Numeros.</p>");
        echo("<p><b>Neutros: </b>".$neutros." Numeros.</p>");
    ?>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>


