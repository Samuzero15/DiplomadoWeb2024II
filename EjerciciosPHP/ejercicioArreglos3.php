
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 de arreglos</title>
</head>
<body>
    <h1>Ejercicio 3 de Arrelgos</h1>
    <p>Dado un arreglo con 20 calificaciones de un grupo de alumnos. <br>
     Calcule y escriba el porcentaje de reprobados. <br>
     Tomando en cuenta que la calificación mínima aprobatoria es de 70. </p>
    <?php

        $arreglo = array();
        for($i = 0; $i < 20; $i++){
            array_push($arreglo, rand(0, 100));
        }

        $lista_nums = "";
        $reprobados = 0;
        $porcentaje_rep = 0;

        foreach($arreglo as $num){
            if($num < 70) $reprobados++;
            $lista_nums .= $num." ";
        }
        $porcentaje_rep = ($reprobados/20) * 100;

        echo("<p><b>Arreglo de calificaciones: </b> [".$lista_nums."]</p>");
        echo("<p><b>Numero de reprobados: </b>".$reprobados." de 20 Estudiantes.</p>");
        echo("<p><b>Porcentaje de reprobados: </b>".$porcentaje_rep."%.</p>");
    ?>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>


