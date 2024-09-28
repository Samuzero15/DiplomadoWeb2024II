<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <p>
    En un club tienen una política de entrada según las edades, realice un programe que lea la edad de una
persona y especifique la política que le corresponde según la misma. Si la edad es menor que 12, “No
puede Ingresar solo”. Si la edad esta entre 12 y 18, “Puede ingresar con su padre que debe ser socio o
solo con previa autorización del padre socio”, Mayor o igual que 18 , “Puede entrar con su respectivo
Carnet o Pase otorgado”
    </p>
    <form action="ej9_respuesta.php" method="POST">
        <label for="edad">Edad:</label><input type="number" name="edad" id="edad" min="0"><br>
        
        <button type="submit">Calcular</button>
    </form>

    <nav>
        <ul>
            <li><a href="index.html">Ir al menu</a></li>
        </ul>
    </nav>
</body>
</html>