<?php
$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h1>Resultado Login</h1>

<p>
<?php
if(empty($usuario) || empty($clave)){
    echo "Todos los campos son obligatorios";
} else {
    if($usuario == "admin" && $clave == "1234"){
        echo "Acceso concedido";
    } else {
        echo "Error de acceso";
    }
}
?>
</p>

<a href="index.php">Volver</a>

</body>
</html>