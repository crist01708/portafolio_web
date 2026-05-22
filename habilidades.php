<?php
include '../config/database.php';

$resultado = mysqli_query($conn, "SELECT * FROM habilidades");
?>

<!DOCTYPE html>
<html lang="es">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark text-white">

<div class="container py-5">

<h2>Administrar Habilidades</h2>

<form action="guardar_habilidad.php" method="POST">

<div class="mb-3">

<label>Habilidad</label>

<input type="text" name="nombre" class="form-control">

</div>

<div class="mb-3">

<label>Porcentaje</label>

<input type="number" name="porcentaje" class="form-control">

</div>

<button class="btn btn-success">
Guardar
</button>

</form>

<hr>

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<div class="mb-4">

<h5><?= $fila['nombre'] ?></h5>

<div class="progress">

<div class="progress-bar"
style="width: <?= $fila['porcentaje'] ?>%">

<?= $fila['porcentaje'] ?>%

<?php
include '../includes/auth.php';
?>

</div>

</div>

</div>

<?php } ?>

</div>

</body>
</html>