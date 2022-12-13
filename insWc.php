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


$insertar = "INSERT INTO wc(f_tournament, f_match, first_memory, best_memory, worst_memory, f_player, f_team, best_winner, best_final, worst_final) 
VALUES ('$f_tournament', '$f_match', '$first_memory', '$best_memory', '$worst_memory', '$f_player', '$f_team', '$best_winner', '$best_final', '$worst_final')";
$resultado = mysqli_query($conn, $insertar);
 if ($resultado) {
	 echo "<script>alert('Registramos tus datos con exito')</script>";
	 header ("Location:WorldCup.php");
 } else {
	 echo "<script>alert('No se pudo registrar')</script>";
 }
?>