<?php
include('connection.php');

$f_tournament = $_POST["f_tournament"];
$f_match = $_POST["f_match"];
$first_memory = $_POST["first_memory"];
$best_memory = $_POST["best_memory"];
$worst_memory = $_POST["worst_memory"];
$f_player = $_POST["f_player"];
$f_team = $_POST["f_team"];
$best_winner = $_POST["best_winner"];
$best_final = $_POST["best_final"];
$worst_final = $_POST["worst_final"];


$actualizar = "UPDATE wc SET  f_tournament='$f_tournament', f_match='$f_match', first_memory='$first_memory', best_memory='$best_memory', worst_memory='$worst_memory', f_player='$f_player',
 f_team='$f_team', best_winner='$best_winner', best_final='$best_final', worst_final='$worst_final', where f_tournament= '$f_tournament' ";

$resultado = mysqli_query($conn, $actualizar);

 if ($resultado) {
	 echo "<script>alert('Actualizado ')</script>";
	 header ("Location: WorldCup.php");
	
	 
 } else {
	 echo "<script>alert('No se pudo actualizar los datos')</script>";
 }
?>