<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <p>
    Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran tres camisas o
mas se aplica un descuento del 20% sobre el total de la compra y si son menos de tres camisas un
descuento del 10%.
    </p>
    <form action="ej2_respuesta.php" method="POST">
        <label for="total">Precio total: </label><input type="number" name="total" id="total"><br>
        <label for="num_camisas">Numero de camisas: </label><input type="number" name="num_camisas" id="num_camisas"><br>
        <button type="submit">Calcular</button>
    </form>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>