<?php
include('connection.php');

//$user_id = $_GET["id"];
$eliminar = "DELETE FROM  euro";

$resultadoeliminar = mysqli_query($conn, $eliminar);

 if ($resultadoeliminar) {
	 header ("Location:Euro.php");
 }  else {
	 echo "<script>alert('No se pudo eliminar')</script>";
 }
?>