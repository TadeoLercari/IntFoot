<?php
include('connection.php');

//$user_id = $_GET["id"];
$eliminar = "DELETE FROM  wc";

$resultadoeliminar = mysqli_query($conn, $eliminar);

 if ($resultadoeliminar) {
	 header ("Location:WorldCup.php");
 }  else {
	 echo "<script>alert('No se pudo eliminar')</script>";
 }
?>