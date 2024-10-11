<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
    <h1>Ventas</h1>
    <form action="ventas.php" method="post">
        <p>
            <input type="checkbox" id="f1" name="shawarma">    
            <label for="f1">Shawarma $7</label>
            <input type="number" max=99 min=1 value=1 name="shawarma_cant"><br>

            <input type="checkbox" id="f2" name="pollo">
            <label for="f2">Pollo Asado $10</label>
            <input type="number" max=99 min=1 value=1 name="pollo_cant"><br>

            <input type="checkbox" id="f3" name="arepa">
            <label for="f3">Arepa $5</label>
            <input type="number" max=99 min=1 value=1 name="arepa_cant"><br>

            <input type="checkbox" id="f4" name="hamburgesa">
            <label for="f4">Hamburgesa $8</label>
            <input type="number" max=99 min=1 value=1 name="hamburgesa_cant"><br>

            <input type="checkbox" id="f5" name="perro">
            <label for="f5">Perro Caliente $3</label>
            <input type="number" max=99 min=1 value=1 name="perro_cant"><br>
        </p>
        <input type="submit" value="Comprar">
    </form>

    <?php
        $comidas = array(array("nombre" => "shawarma", "precio" => 7),
            array("nombre" => "pollo", "precio" => 10),
            array("nombre" => "arepa", "precio" => 5),
            array("nombre" => "hamburgesa", "precio" => 8),
            array("nombre" => "perro", "precio" => 3)
        );
        if(isset($_POST["shawarma"]) || isset($_POST["pollo"]) || isset($_POST["arepa"]) ||isset($_POST["hamburgesa"]) || isset($_POST["perro"])) {
            $suma = 0;
            foreach($comidas as $comida){
                if(isset($_POST[$comida["nombre"]])){
                    $suma += $comida["precio"] * $_POST[$comida["nombre"]."_cant"];
                }
            }
            echo("<h3>Precio total: ".$suma."$</h3>");
        }else {
            echo("<h3>Elige las comidas</h3>");
        }
    ?>
</body>
</html>