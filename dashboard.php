<?php
// Start the session to track user login status
session_start();

// Redirect to login if user is not authenticated
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Bienvenido a tu Panel de Control, <?php echo $_SESSION["username"]; ?>!</h1>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
