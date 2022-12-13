<?php
include('connection.php');
//$user_id = $_GET["id"];
$worldcup = mysqli_query ($conn,"SELECT * FROM wc");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica tu opinion - Wc</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/eurowc.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/1.jpg" type="image/x-icon">

    <!-- ION-ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>

    <header class="header" data-header>

        <div class="container">

            <a href="#" class="logo">
                <img src="img/1.jpg" width="70px">
            </a>

            <button class="menu-toggle-btn" data-nav-toggle-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar">

               <!-- <ul class="navbar-list">

                    <li>
                        <a href="WorldCup.php" class="navbar-link">World Cup</a>
                    </li>

                    <li>
                        <a href="Euro.php" class="navbar-link">Euro</a>
                    </li>-->

              

                </ul>

                <div class="header-actions">
                </div>

            </nav>

        </div>

    </header>

    <main>

        <article>

            <section class="hero" id="hero">

                <div class="container">

                   <div class="hero-content">

                        <h1 class="h1 hero-title">Edita tu opinion</h1>
                       

                    </div>

                    <figure class="hero-banner">
                        <img src="img/1.jpg" height="400px">
                    </figure>

                </div>

            </section>

            <section class="blog" id="blog">

                <div class="container">
        
                  <h2 class="h2 section-title">Modificacion </h2>
        
                  <p class="section-text">
                    Modifica tu opinion
                  </p>


	                 <form action="procesar_actualizarWc.php" class="enter-exercise" method="post">
	<?php $resultado =  $worldcup;
			while($row=mysqli_fetch_assoc($resultado)) { ?>	
 
					
					  <div class="ex-input">
                        <label for="" class="enter-ex">Favourite match</label>
                        <input type="text" name="f_match" id="f_match" class="input-ex" required autocomplete="off" min="0">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">First memory</label>
                        <input type="text" name="first_memory" id="first_memory" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best memory</label>
                        <input type="text" name="best_memory" id="best_memory" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                   <div class="ex-input">
                        <label for="" class="enter-ex">Worst memory</label>
                        <input type="text" name="worst_memory" id="worst_memory" class="input-ex" required autocomplete="off" min="0">
                    </div>					
					<div class="ex-input">
                        <label for="" class="enter-ex">Favourite player</label>
                        <input type="text" name="f_player" id="f_player" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Favourite team</label>
                        <input type="text" name="f_team" id="f_team" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best winner</label>
                        <input type="text" name="best_winner" id="best_winner" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best final</label>
                        <input type="text" name="best_final" id="best_final" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                     <div class="ex-input">
                        <label for="" class="enter-ex">Worst final</label>
                        <input type="text" name="worst_final" id="worst_final" class="input-ex" required autocomplete="off" min="0">
                    </div>			

                    <div class="ex-input button">
                        <input type="submit" value="Actualizar" class="input-ex button">
                    </div>
			<?php } mysqli_free_result($resultado);?>
                  </form>




	</form>
        </body>
</html>