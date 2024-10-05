
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 de arreglos</title>
</head>
<body>
    <h1>Ejercicio 4 de Arrelgos</h1>
    <p>Un INFLUENCER dispone de una cantidad de euros que quiere repartir a un conjunto de personas. A cada persona le da una cantidad de dinero proporcional a la edad de la misma. Por ejemplo, si una persona tiene 17 años recibirá € 170 y si tiene 32 años recibirá € 320. Genere la edad de manera aleatoria entre 1 y 100.Escribir un programa que devuelva el número de personas que podrán recibir una cantidad de dinero. Cuando la cantidad de dinero ya no es suficiente para dársela a una persona, suponemos que no existen más personas y que por tanto el programa finaliza y nos dice cuánto dinero le quedó al INFLUENCER.</p>
    
    <form action="ejercicioArreglos4.php" method="post">
        <label for="dinero_a_repartir">Dinero a Repartir: </label> 
        <input type="number" name="dinero_a_repartir" id="dinero_a_repartir"> <br>
        <input type="submit" value="Procesar.">
    </form>
    
    <?php
        if(!empty($_POST["dinero_a_repartir"])){
            $dinero = $_POST["dinero_a_repartir"];
            $recibe = 0;
            $edad = rand(1, 100);
            $n_personas = 0;
            while($recibe < $dinero){
                $recibe = $edad * 10;
                $dinero = $dinero - $recibe;
                echo("<p><b>Edad: </b> ".$edad." Años, <b>Recibe: </b>".$recibe." $</p>");
                $n_personas++;
                $edad = rand(1, 100);
            }
            if($dinero < 0) $dinero = 0;
            echo("<p><b>Numero de personas repartidas: </b>".$n_personas."</p>");
            echo("<p><b>Dinero restante del influencer: </b> ".$dinero."$</p>");
        }
    ?>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>


