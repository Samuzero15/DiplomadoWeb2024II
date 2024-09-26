<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <p>
    <form action="calc_respuesta.php" method="POST">
        <label for="num1">Primer numero: </label><input type="number" name="num1" id="num1"> <br>
        <label for="num2">Segundo numero: </label><input type="number" name="num2" id="num2"> <br>

        <label for="operacion">Operacion</label>
        <select name="operacion" id="operacion">
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicacion</option>
            <option value="/">Division</option>
        </select> <br>
        <button type="submit">Calcular</button>
    </form>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>