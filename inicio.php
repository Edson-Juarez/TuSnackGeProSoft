<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['idPersona'])) {
	header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Página de inicio</title>
</head>
<body>
	<h1>Bienvenido</h1>
<p>Has iniciado sesión como: <?php echo $_SESSION['idPersona']; ?></p>
<a href="AltaPersona.php">Entrar al sistema</a>

</body>
</html>
