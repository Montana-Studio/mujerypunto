<?php
require_once 'mysqli-login.php';

try {
   $conn = mysqli_connect($hostname, $username, $password,  $database);
	mysqli_set_charset($conn, "utf8");
	$correo=$_POST['correo'];
	$nombre=$_POST['nombre'];
	$sql = "SELECT correo FROM newsletter WHERE correo='".$correo."'";
	$resultado = $conn->query($sql);
	$resultado->num_rows;
	if($resultado->num_rows<1){
		$sql = "INSERT INTO newsletter (nombre, correo) VALUES ('".$nombre."', '".$correo."')";
		$resultado = $conn->query($sql);
		mysqli_close($conn);
		echo 'exito';
	}else{
		echo 'exito'; // caso correo exito
	}
} catch (Exception $e) {
    echo 'conexion';
}
?>