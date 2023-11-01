<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al usuario a la página de login (puedes cambiar esto según tu estructura)
header("Location: ../index.php");
exit();
?>
