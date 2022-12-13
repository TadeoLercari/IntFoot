<?php  

    include('connection.php');
    $worldcup = "SELECT * FROM wc";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal view - World Cup</title>

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

            <a href="" class="logo">
                <img src="assets/img/1.jpg" width="70px">
            </a>

            <button class="menu-toggle-btn" data-nav-toggle-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar">

                <ul class="navbar-list">


                    <li>
                        <a href="Euro.php" class="navbar-link">Euro</a>
                    </li>


                </ul>


            </nav>

        </div>

    </header>

    <main>

        <article>

            <section class="hero" id="hero">

                <div class="container">

                    <div class="hero-content">

                        <h1 class="h1 hero-title">Inserta tu opinion personal acerca de los mundiales</h1>
                        
                        

                    </div>

                    <figure class="hero-banner">
                        <img src="img/1.jpg" height="">
                    </figure>

                </div>

            </section>

            <section class="blog" id="blog">

                <div class="container">
        
                  <h2 class="h2 section-title">Opinion personal</h2>
        
                  
        
                  <form action="insWc.php" class="enter-exercise" method="post">

                    <div class="ex-input">
                        <label for="" class="enter-ex">Favourite tournament </label>
                        <input type="text" name="f_tournament" id="" class="input-ex" required autocomplete="off">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">Favourite match</label>
                        <input type="text" name="f_match" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">First memory</label>
                        <input type="text" name="first_memory" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best memory</label>
                        <input type="text" name="best_memory" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                   <div class="ex-input">
                        <label for="" class="enter-ex">Worst memory</label>
                        <input type="text" name="worst_memory" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>					
					<div class="ex-input">
                        <label for="" class="enter-ex">Favourite player</label>
                        <input type="text" name="f_player" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Favourite team</label>
                        <input type="text" name="f_team" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best winner</label>
                        <input type="text" name="best_winner" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                    <div class="ex-input">
                        <label for="" class="enter-ex">Best final</label>
                        <input type="text" name="best_final" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>		
                     <div class="ex-input">
                        <label for="" class="enter-ex">Worst final</label>
                        <input type="text" name="worst_final" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>						
					


                    <div class="ex-input button">
                        <input type="submit" value="Insert" class="input-ex button">
                    </div>

                  </form>

                  <div class="container-table">
                    
                    <div class="table-title">World Cup  IntFoot</div>

                    <div class="table-header">Favourite tournament</div>
                    <div class="table-header">Favourite match</div>
					<div class="table-header">First memory</div>
                    <div class="table-header">Best memory</div>
                    <div class="table-header">Worst memory</div>
					<div class="table-header">Favourite player</div>
					<div class="table-header">Favourite team</div>
					<div class="table-header">Best winner</div>
					<div class="table-header">Best final</div>
					<div class="table-header">Worst final</div>
					<div class="table-header">Editar</div>
					<div class="table-header">Eliminar</div>

                    <?php $result = mysqli_query($conn, $worldcup); 
                    while($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="table-item"> <?php echo $row['f_tournament']; ?> </div>
                    <div class="table-item"> <?php echo $row['f_match']; ?> </div>
					<div class="table-item"> <?php echo $row['first_memory']; ?> </div>
					<div class="table-item"> <?php echo $row['best_memory']; ?> </div>
					<div class="table-item"> <?php echo $row['worst_memory']; ?> </div>
					<div class="table-item"> <?php echo $row['f_player']; ?> </div>
				    <div class="table-item"> <?php echo $row['f_team']; ?> </div>
					<div class="table-item"> <?php echo $row['best_winner']; ?> </div>
					<div class="table-item"> <?php echo $row['best_final']; ?> </div>
					<div class="table-item"> <?php echo $row['worst_final']; ?> </div>
					<div class="table-item"> <a href="updWc.php?id=<?php echo $row["f_tournament"];?>&f_match=<?php echo $row["f_match"];?>&first_memory=<?php echo $row["first_memory"];?>&best_memory=<?php echo $row["best_memory"];?>&worst_memory=<?php echo $row["worst_memory"];?>; &f_player=<?php echo $row["f_player"];?>; &f_team=<?php echo $row["f_team"];?>; &best_winner=<?php echo $row["best_winner"];?>; &best_final=<?php echo $row["best_final"];?>; &worst_final=<?php echo $row["worst_final"];?>"class="table-item-link">Editar</a> </div>
                    <div class="table-item"> <a href="procesar_eliminarWc.php?id=<?php echo $row["f_tournament"];?>" class="table-item-link">Eliminar</a> </div>

			        <?php } mysqli_free_result($result);?>

                  </div>
        
                </div>

              </section>

        </article>

    </main>