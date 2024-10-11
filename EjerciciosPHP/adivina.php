<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina color</title>
</head>
<body>
    <form action="adivina.php" method="post">
        <label for="amarillo"> Amarillo </label>
        <input type="checkbox" name="color[]" id="amarillo" value=1><br>

        <label for="verde"> Verde </label>
        <input type="checkbox" name="color[]" id="verde" value=2><br>

        <label for="rojo"> Rojo </label>
        <input type="checkbox" name="color[]" id="rojo" value=3><br>

        <label for="azul"> Azul </label>
        <input type="checkbox" name="color[]" id="azul" value=4><br>

        <label for="negro"> Negro</label>
        <input type="checkbox" name="color[]" id="negro" value=5><br>

        <input type="submit" value="Adivinar">
    </form>
    <?php
        if(isset($_POST['color'])){
            $mis_colores = array();
            //var_dump($_POST['color']);
            while(count($mis_colores) < 3){
                $color = rand(1, 5);
                while(in_array($color, $mis_colores)){
                    $color = rand(1, 5);
                }
                array_push($mis_colores, $color);
            }
            $aciertos = 0;
            foreach($_POST['color'] as $tu_color){
                if(in_array($tu_color, $mis_colores)){
                    $aciertos++;
                }
            }
            echo("<h3>Acertaste ".$aciertos." Colores!<h3>");
            if($aciertos == 3) echo("<h1>Ganaste!</h1>");
        }
    ?>
    <script>
        // Esto es trampa pero weno xd
        var check_amarillo = document.getElementById("amarillo");
        var check_verde = document.getElementById("verde");
        var check_rojo = document.getElementById("rojo");
        var check_azul = document.getElementById("azul");
        var check_negro = document.getElementById("negro");

        function Limitar3Checks (checks) {
            var seleccionados = 0;
            for(var i = 0; i < checks.length; i++){
                if(checks[i].checked)seleccionados++;
            }
            return seleccionados;
        }

        check_amarillo.addEventListener("click", function (e) {
            var seleccionados = Limitar3Checks([check_verde, check_rojo, check_azul, check_negro]);
            if(seleccionados >= 3) e.preventDefault();
        })

        check_verde.addEventListener("click", function (e) {
            var seleccionados = Limitar3Checks([check_amarillo, check_rojo, check_azul, check_negro]);
            if(seleccionados >= 3) e.preventDefault();
        })

        check_rojo.addEventListener("click", function (e) {
            var seleccionados = Limitar3Checks([check_amarillo, check_verde, check_azul, check_negro]);
            if(seleccionados >= 3) e.preventDefault();
        })

        check_azul.addEventListener("click", function (e) {
            var seleccionados = Limitar3Checks([check_amarillo, check_verde, check_rojo, check_negro]);
            if(seleccionados >= 3) e.preventDefault();
        })

        check_negro.addEventListener("click", function (e) {
            var seleccionados = Limitar3Checks([check_amarillo, check_verde, check_rojo, check_azul]);
            if(seleccionados >= 3) e.preventDefault();
        })


    </script>
</body>
</html>