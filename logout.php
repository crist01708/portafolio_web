<?php
// Resume the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Unset all session variables
session_unset();

// Destruye la sesión
session_destroy();

echo "has cerrado la sesión."
?>

</body>
</html>