
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 de arreglos</title>
</head>
<body>
    <h1>Ejercicio 2 de Arrelgos</h1>
    <p>2. Dado un arreglo con 20 edades de personas, determinar cuántos son niños, jóvenes, adultos y viejos. <br>
         Se determinan las categorías con base en la siguiente tabla: </p>
    <p>CATEGORIA EDAD <br>
        Niños 0 – 13 <br>
        Jóvenes 13 – 29 <br>
        Adultos 30 – 59 <br>
        Viejos 60 en adelante</p>
    <?php

        $arreglo = array();
        for($i = 0; $i < 20; $i++){
            array_push($arreglo, rand(0, 80));
        }

        $lista_nums = "";
        $niños = 0;
        $jovenes = 0;
        $adultos = 0;
        $ancianos = 0;

        foreach($arreglo as $num){
            if($num >= 0 && $num <= 13) $niños++;
            else if($num >= 14 && $num <= 29) $jovenes++;
            else if($num >= 30 && $num <= 59) $adultos++;
            else $ancianos ++;
            $lista_nums .= $num." ";
        }

        echo("<p><b>Arreglo de edades: </b> [".$lista_nums."]</p>");
        echo("<p><b>Niños: </b>".$niños." Personas.</p>");
        echo("<p><b>Jovenes: </b>".$jovenes." Personas.</p>");
        echo("<p><b>Adultos: </b>".$adultos." Personas.</p>");
        echo("<p><b>Ancianos: </b>".$ancianos." Personas.</p>");

    ?>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>


