<?php
include '../config/database.php';

$resultado = mysqli_query($conn, "SELECT * FROM tecnologias");
?>

<!DOCTYPE html>
<html lang="es">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="bg-dark text-white">

<div class="container py-5">

<h2>Tecnologías</h2>

<form action="guardar_tecnologia.php" method="POST">

<div class="mb-3">

<label>Nombre</label>

<input type="text" name="nombre" class="form-control">

</div>

<div class="mb-3">

<label>Ícono FontAwesome</label>

<input type="text" name="icono" class="form-control">

</div>

<div class="mb-3">

<label>Nivel</label>

<input type="number" name="nivel" class="form-control">

</div>

<button class="btn btn-primary">
Guardar
</button>

</form>

<hr>

<div class="row">

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<div class="col-md-4 mb-4">

<div class="card bg-secondary text-center p-4">

<i class="<?= $fila['icono'] ?> fa-3x mb-3"></i>

<h4><?= $fila['nombre'] ?></h4>

<p><?= $fila['nivel'] ?>%</p>

<?php
include '../includes/auth.php';
?>

</div>

</div>

<?php } ?>

</div>

</div>

</body>
</html>