<?php
include '../config/database.php';

$resultado = mysqli_query($conn, "SELECT * FROM biografia");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Biografía</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

<div class="container py-5">

<h2 class="mb-4">Administrar Biografía</h2>

<form action="guardar_biografia.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control">
</div>

<div class="mb-3">
<label>Descripción</label>
<textarea name="descripcion" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Foto</label>
<input type="file" name="foto" class="form-control">
</div>

<button class="btn btn-primary">
Guardar
</button>

</form>

<hr>

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<div class="card bg-secondary mb-3">

<div class="card-body">

<h4><?= $fila['nombre'] ?></h4>

<p><?= $fila['descripcion'] ?></p>

<img src="../assets/img/<?= $fila['foto'] ?>" width="150">

<?php
include '../includes/auth.php';
?>

</div>

</div>

<?php } ?>

</div>

</body>
</html>