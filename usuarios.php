<?php  

    include('connection.php');
    $user = "SELECT * FROM users";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registra tu usuario - IntFoot</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- FAVICON -->
   <link rel="shortcut icon" href="img/la-historia-del-futbol.png" type="image/x-icon">

    <!-- ION-ICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>

    <header class="header" data-header>

        <div class="container">

            <a href="" class="logo">
                <img src="assets/img/la-historia-del-futbol.png" width="70px">
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


            </nav>

        </div>

    </header>

    <main>

        <article>

            <section class="hero" id="hero">

                <div class="container">

                    <div class="hero-content">

                        <h1 class="h1 hero-title">Registro de Usuarios</h1>
                        <p class="hero-text">Registra tu usuario online en IntFoot</p>
                        <p class="form-text">
                            <span>💪</span> Registrate y accede al maravilloso mundo de la historia del futbol
                        </p>

                    </div>

                    <figure class="hero-banner">
                        <img src="img/la-historia-del-futbol.png" height="">
                    </figure>

                </div>

            </section>

            <section class="blog" id="blog">

                <div class="container">
        
                  <h2 class="h2 section-title">Usuario</h2>
        
                  <p class="section-text">
                    Registrate y sumate a nuestra comunidad
                  </p>
        
                  <form action="insertar.php" class="enter-exercise" method="post">

                    <div class="ex-input">
                        <label for="" class="enter-ex">Nombre </label>
                        <input type="text" name="name" id="" class="input-ex" required autocomplete="off">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">Contraseña</label>
                        <input type="password" name="password" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>

                    <div class="ex-input">
                        <label for="" class="enter-ex">Correo Electronico</label>
                        <input type="text" name="email" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>
                    <div class="ex-input">
                        <label for="" class="enter-ex">Edad</label>
                        <input type="number" name="edad" id="" class="input-ex" required autocomplete="off" min="0">
                    </div>					

                    <div class="ex-input button">
                        <input type="submit" value="Registrate" class="input-ex button">
                    </div>

                  </form>

                  <div class="container-table">
                    
                    <div class="table-title">Comunidad  IntFoot</div>

                    <div class="table-header">Nombre</div>
                    <div class="table-header">Mail</div>
					<div class="table-header">Edad</div>
                    <div class="table-header">Editar</div>
                    <div class="table-header">Eliminar</div>

                    <?php $result = mysqli_query($conn, $user); 
                    while($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="table-item"> <?php echo $row['name']; ?> </div>
                    <div class="table-item"> <?php echo $row['email']; ?> </div>
					<div class="table-item"> <?php echo $row['edad']; ?> </div>
					<div class="table-item"> <a href="actualizar.php?id=<?php echo $row["user_id"];?>&name=<?php echo $row["name"];?>&password=<?php echo $row["password"];?>&email=<?php echo $row["email"];?>&edad=<?php echo $row["edad"];?>" class="table-item-link">Editar</a> </div>
                    <div class="table-item"> <a href="procesar_eliminar.php?id=<?php echo $row["user_id"];?>" class="table-item-link">Eliminar</a> </div>

			        <?php } mysqli_free_result($result);?>

                  </div>
        
                </div>

              </section>

        </article>

    </main>

    <footer>

    <!--   <div class="footer-top">

            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="assets/img/logo.png" width="100px">
                    </a>

                    <p class="footer-text">
                        Seguinos en nuestras redes!
                    </p>

                    <ul class="social-list">

                        <li>

                            <a href="https://www.instagram.com/" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>

                        </li>

                        <li>

                            <a href="https://twitter.com/" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>

                        </li>

                        <li>

                            <a href="https://www.tiktok.com/" class="social-link">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </a>

                        </li>

                    </ul>

                </div>

                 <div class="footer-link-box">

                    <ul class="footer-list">

                        <li>
                            <p class="footer-item-title">LINKS RAPIDOS</p>
                        </li>

                        <li>
                            <a href="training.php" class="footer-link">Plan de Entrenamiento</a>
                        </li>

                        <li>
                            <a href="video.html" class="footer-link">Videos</a>
                        </li>

                        <li>
                            <a href="diet.php" class="footer-link">Plan de Alimentación</a>
                        </li>

                        <li>
                            <a href="progress.php" class="footer-link">Progreso</a>
                        </li>

                        <li>
                            <a href="Usuarios.php" class="footer-link">Mi Cuenta</a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-item-title">SOCIOS</p>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Empresa 1</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Empresa 2</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Empresa 3</a>
                        </li>

                    </ul>

                    <ul class="footer-list">

                        <li>
                            <p class="footer-item-title">SOPORTE</p>
                        </li>

                        <li>
                            <a href="#contact" class="footer-link">Contactanos</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">About Us</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Terminos y Condiciones</a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="footer-bottom">

                <div class="container">

                    <p class="copyright">
                        &copy; 2022 <a href="#hero">FitPlus</a>
                    </p>

                </div>

            </div>

        </div> -->

    </footer>
    
</body>
</html>