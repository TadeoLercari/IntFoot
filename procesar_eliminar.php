<?php
include('connection.php');

$user_id = $_GET["id"];
$eliminar = "DELETE FROM  users WHERE user_id = '$user_id'";

$resultadoeliminar = mysqli_query($conn, $eliminar);

 if ($resultadoeliminar) {
	 header ("Location:usuarios.php");
 }  else {
	 echo "<script>alert('No se pudo eliminar')</script>";
 }
?>