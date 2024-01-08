<?php
// Conexión a la base de datos

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "productos";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Obtener los datos del formulario
	$idPersona = $_POST['idPersona'];
	$password = $_POST['password'];

	// Consulta para obtener los datos del usuario
	$sql = "SELECT * FROM persona WHERE idPersona = '$idPersona' AND password = '$password'";
	$resultado = mysqli_query($conn, $sql);

	if (mysqli_num_rows($resultado) == 1) {
		// Iniciar sesión y redirigir a la página de inicio
		session_start();
		$_SESSION['idPersona'] = $idPersona;
		header('Location: AltaPersona.php');
	} else {
		// Mostrar mensaje de error
		echo "El ID de Persona o la contraseña son incorrectos.";
	}
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Login</title>
	<link rel="stylesheet" href="login.css">
	<style>
		
		body {
			background-color: #f2f2f2;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 400px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
			font-size: 16px;
			color: #555;
			font-family: 'Open Sans', sans-serif;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #2E8B57;
		}
	</style>
</head>
<body>
	<h1>Inicio de Sesión</h1>
	
	<form action="login.php" method="post">
	<img width="100px" height="100px" src="/img/user.png" alt="avatar">
	<br>
		<label for="idPersona">Nombre:</label>
		<input type="text" name="idPersona" id="idPersona" required>
		<label for="password">Contraseña:</label>
		<input type="password" name="password" id="password" required>
		<input type="submit" value="Iniciar Sesión">
	</form>
</body>
</html>
