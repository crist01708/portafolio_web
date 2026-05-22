<?php
include '../config/database.php';

$resultado = mysqli_query($conn, "SELECT * FROM proyectos");
?>

<!DOCTYPE html>
<html lang="es">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark text-white">

<div class="container py-5">

<h2>Administrar Proyectos</h2>

<form action="guardar_proyecto.php"
method="POST"
enctype="multipart/form-data">

<div class="mb-3">

<label>Título</label>

<input type="text"
name="titulo"
class="form-control">

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea name="descripcion"
class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Imagen</label>

<input type="file"
name="imagen"
class="form-control">

</div>

<div class="mb-3">

<label>GitHub</label>

<input type="url"
name="github"
class="form-control">

</div>

<div class="mb-3">

<label>Demo</label>

<input type="url"
name="demo"
class="form-control">

</div>

<button class="btn btn-success">
Guardar Proyecto
</button>

</form>

<hr>

<div class="row">

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<div class="col-md-4 mb-4">

<div class="card bg-secondary h-100">

<img src="../assets/img/proyectos/<?= $fila['imagen'] ?>"
class="card-img-top">

<div class="card-body">

<h4><?= $fila['titulo'] ?></h4>

<p><?= $fila['descripcion'] ?></p>

<a href="<?= $fila['github'] ?>"
class="btn btn-dark">

GitHub

</a>

<a href="<?= $fila['demo'] ?>"
class="btn btn-primary">

<?php
include '../includes/auth.php';
?>

Demo

</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</body>
</html>