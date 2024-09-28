<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta Ejercicio 9</title>
</head>
<body>
    <h1>Respuesta Ejercicio 9</h1>
    <?php
        /*En un club tienen una política de entrada según las edades, realice un programe que lea la edad de una
persona y especifique la política que le corresponde según la misma. Si la edad es menor que 12, “No
puede Ingresar solo”. Si la edad esta entre 12 y 18, “Puede ingresar con su padre que debe ser socio o
solo con previa autorización del padre socio”, Mayor o igual que 18 , “Puede entrar con su respectivo
Carnet o Pase otorgado”. */
        if(strlen($_POST["edad"]) == 0){
            echo("<p>Ingrese la edad.</p>");
            die();
        }
        $edad = $_POST["edad"];
        $resultado = "No puede ingresar solo";
        if($edad >= 12 && $edad < 18){
            $resultado = "Puede ingresar con su padre que debe ser socio o solo con previa autorización del padre socio";
        }else if ($edad >= 18){
            $resultado = "Puede entrar con su respectivo Carnet o Pase otorgado";
        }
    ?>

    <p>Edad: <b><?php echo($edad);?></b> Años</p>
    <p><b><?php echo($resultado);?></b></p>

    <nav>
        <ul>
            <li><a href="ejercicio9.php">Volver al formulario del ejercicio</a></li>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>