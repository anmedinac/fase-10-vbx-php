<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuario</title>
</head>
<body>
    <h2>Formulario de Login</h2>
    <form action="/corposurgir/data/validar_login.php" method="post">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
    <a href="/corposurgir/formularios/registro_formulario.php">Registrar</a>
</body>
</html>
