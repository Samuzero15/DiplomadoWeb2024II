<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
</head>
<body>
    <h1>Bingo</h1>
    <form action="bingo.php" method="post">
        <label for="num">Limite de aciertos: </label>
        <input type="number" name="num" id="num" max="25" min="1" value="5">
        <input type="submit" value="Ejecutar">
    </form>
    <?php
        if(isset($_POST["num"])){
            $tablero_bingo = array();
            echo("<table>");
            for($i = 0; $i < 5; $i++){
                echo("<tr>");
                for($j = 0; $j < 5; $j++){
                    echo("<td>");
                    $num = rand(0, 99);
                    while(in_array($num, $tablero_bingo)){
                        $num = rand(0, 99);
                    }
                    $tablero_bingo[($i*5)+$j] = $num;
                    echo($tablero_bingo[($i*5)+$j]);
                    echo("</td>");
                }
                echo("</tr>");
            }
            echo("</table>");

            echo("<ul>");
            $aciertos = 0;
            $numeros_cantados = array();
            while($aciertos < $_POST["num"]){
                $num_cantado = rand(0, 99);
                while(in_array($num_cantado, $numeros_cantados)){
                    $num_cantado = rand(0, 99);
                }
                if(in_array($num_cantado, $tablero_bingo)){
                    $aciertos++;
                    echo("<li><b>Numero '".$num_cantado."' aparece en el cartón</b></li>");
                } else {
                    echo("<li>Numero '".$num_cantado."' no aparece en el cartón</li>");
                }
                array_push($numeros_cantados, $num_cantado);
            }
            echo("</ul>");
            echo("<h3>Bingo! Tablero final:</h3>");
            echo("<table>");
            for($i = 0; $i < 5; $i++){
                echo("<tr>");
                for($j = 0; $j < 5; $j++){
                    echo("<td>");
                    echo(in_array($tablero_bingo[($i*5)+$j], $numeros_cantados) ?
                     "<b> ".$tablero_bingo[($i*5)+$j]." </b>" : $tablero_bingo[($i*5)+$j]);
                    echo("</td>");
                }
                echo("</tr>");
            }
            echo("</table>");
        }
        
    ?>
</body>
</html>