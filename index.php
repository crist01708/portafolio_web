<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario básico</title>
</head>
<body>

<h1>Formulario</h1>

<form method="POST" action="procesar.php">
    <label>Usuario:</label>
    <input type="text" name="usuario">
    <button type="submit">Enviar</button>
</form>

<?php include 'includes/navbar.php'; ?>

<?php include 'includes/footer.php'; ?>

<!-- <h2>Login</h2>

<form method="POST" action="login.php">
    <label>Usuario:</label>
    <input type="text" name="usuario"><br><br>

    <label>Clave:</label>
    <input type="password" name="clave"><br><br>

    <button type="submit">Ingresar</button>
</form> -->

</body>
</html>