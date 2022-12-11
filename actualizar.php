<?php
include('connection.php');
$user_id = $_GET["id"];
$user = mysqli_query ($conn,"SELECT * FROM users WHERE user_id = '$user_id'");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra tu usuario- IntFoot</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- ION-ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>

    <header class="header" data-header>

        <div class="container">

            <a href="#" class="logo">
                <img src="img/la-historia-del-futbol.png" width="70px">
            </a>

            <button class="menu-toggle-btn" data-nav-toggle-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar">

                <ul class="navbar-list">

                    <li>
                        <a href="WorldCup.php" class="navbar-link">World Cup</a>
                    </li>

                    <li>
                        <a href="Euro.php" class="navbar-link">Euro</a>
                    </li>

              

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

                        <h1 class="h1 hero-title">Modificacion de Usuarios</h1>
                        <p class="hero-text">Modifica tus datos online en IntFoot</p>
                        <p class="form-text">
                            <span>💪</span> Registrate y accede al maravilloso mundo de la historia del futbol 
                        </p>

                    </div>

                    <figure class="hero-banner">
                        <img src="img/la-historia-del-futbol.png" height="400px">
                    </figure>

                </div>

            </section>

            <section class="blog" id="blog">

                <div class="container">
        
                  <h2 class="h2 section-title">Modificacion de Usuario</h2>
        
                  <p class="section-text">
                    Modifica tus datos
                  </p>


	                  <form action="procesar_actualizar.php" class="enter-exercise" method="post">
	<?php $resultado =  $user;
			while($row=mysqli_fetch_assoc($resultado)) { ?>	
 
					<div class="ex-input">

                        <input type="hidden" name="id" id="id"  value ="<?php echo $row["user_id"];?>" class="input-ex" required autocomplete="off">
                    </div>
					
					<div class="ex-input">
                        <label for="" class="enter-ex">Nombre </label>
                        <input type="text" name="name" id="name"  value ="<?php echo $row["name"];?>" class="input-ex" required autocomplete="off">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">Contraseña</label>
                        <input type="password" name="password" id="password" value ="<?php echo $row["password"];?>"   class="input-ex" required autocomplete="off" min="0">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">Correo Electronico</label>
                        <input type="text" name="email" id="email"   value ="<?php echo $row["email"];?>" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Edad</label>
                        <input type="number" name="edad" id="edad"  value ="<?php echo $row["edad"];?>" class="input-ex" required autocomplete="off" min="0">
                    </div>					

                    <div class="ex-input button">
                        <input type="submit" value="Actualizar" class="input-ex button">
                    </div>
			<?php } mysqli_free_result($resultado);?>
                  </form>




	</form>
        </body>
</html>