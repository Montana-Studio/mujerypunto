<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mysqli = mysqli_connect('localhost','root', 'root', 'mujerypunto_com');
$result = $mysqli->query('INSERT INTO newsletter (nombre, correo) VALUES ("'.$nombre.'", "'.$correo.'")');
if (!$mysqli) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}else{
	echo 'exito';
}
?>