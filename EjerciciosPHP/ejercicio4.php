<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>
    Calcular el número de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio aeróbico; la formula que se aplica cuando el sexo es femenino es: • número pulsaciones = (220 - edad) / 10 y si el sexo es masculino: • número pulsaciones = (210 - edad) / 10.
    </p>
    <form action="ej4_respuesta.php" method="POST">
        <label for="edad">Edad: </label><input type="number" name="edad" id="edad">
        <p>Genero:</p>
        <input type="radio" name="sexo" value="M" id="masculino"><label for="masculino">Masculino</label><br>
        <input type="radio" name="sexo" value="F" id="femenino"><label for="femenino">Femenino</label><br>
        <button type="submit">Calcular</button>
    </form>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>