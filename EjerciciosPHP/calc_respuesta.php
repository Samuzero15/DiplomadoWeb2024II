<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Calculadora</title>
</head>
<body>
    <h1>Resultado Calculadora</h1>
    <?php
        if(strlen($_POST["num1"]) == 0){
            echo("<p>Ingrese el primer numero</p>");
            die();
        }
        if(strlen($_POST["num2"]) == 0){
            echo("<p>Ingrese el segundo numero.</p>");
            die();
        }
        $res = null;
        if($_POST["operacion"] == "+"){
            $res = $_POST["num1"] + $_POST["num2"];
        }else if($_POST["operacion"] == "-"){
            $res = $_POST["num1"] - $_POST["num2"];
        }else if($_POST["operacion"] == "*"){
            $res = $_POST["num1"] + $_POST["num2"];
        }else if($_POST["operacion"] == "/"){
            if($_POST["num2"] == 0)
                $res = "Error: Division entre 0";
            else $res = $_POST["num1"] / $_POST["num2"];
        }
       
        
    ?>

    <p><b><?php echo($res);?></b></p>

    <nav>
        <ul>
            <li><a href="calculadora.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>