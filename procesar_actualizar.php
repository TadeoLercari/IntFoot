<?php
include('connection.php');

$user_id = $_POST["id"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$edad = $_POST["edad"];


$actualizar = "UPDATE users SET  user_id='$user_id', email='$email', name='$name', password='$password', edad='$edad' where user_id= '$user_id' ";

$resultado = mysqli_query($conn, $actualizar);

 if ($resultado) {
	 echo "<script>alert('Actualizado ')</script>";
	 header ("Location:usuarios.php");
	
	 
 } else {
	 echo "<script>alert('No se pudo actualizar los datos')</script>";
 }
?>