<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos</title>
</head>
<body>
    <h1>Datos</h1>
    <form action="welcome2.php" method="POST">
        Nombre: <input type="text" name="name" pattern="[A-Z|a-z|ñ|Ñ|ü|Ü|á|Á|é|É|í|Í|ó|Ó|ú|Ú| |]"><br><br>
        Edad: <input type="text" name="edad" pattern="[0-9]{1,99}"><br><br>
    <input type="submit">
    </form>
</body>
</html>