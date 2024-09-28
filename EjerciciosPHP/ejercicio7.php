<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <p>
    Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el
promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento
del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar
la colegiatura completa, la cual incluye el 10% de IVA. Obtener cuanto debe pagar un alumno.
    </p>
    <form action="ej7_respuesta.php" method="POST">
        <label for="costo">Costo de Colegiatura:</label><input type="number" name="costo" id="costo" min="0"><br>
        <label for="promedio">Promedio del alumno:</label><input type="number" name="promedio" id="promedio" min='0' max='10'><br>

        <button type="submit">Calcular</button>
    </form>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>