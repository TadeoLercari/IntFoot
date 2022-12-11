<?php
  include('connection.php');

$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$edad = $_POST["edad"];


$insertar = "INSERT INTO users(email, name, password, edad) VALUES ('$email', '$name', '$password','$edad')";
$resultado = mysqli_query($conn, $insertar);
 if ($resultado) {
	 echo "<script>alert('Registramos tus datos con exito')</script>";
	 header ("Location:usuarios.php");
 } else {
	 echo "<script>alert('No se pudo registrar')</script>";
 }
?>