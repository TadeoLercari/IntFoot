<?php

	include('connection.php');

	session_start();
    error_reporting(0);

    if (isset($_SESSION['name']))
    {
        header("Location: index.html");
    }

    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result -> num_rows > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            header("Location: index.html");
        }
        else
        {
            echo "<script>alert('Correo Electrónico o Contraseña incorrectos!')</script>";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión - IntFoot</title>

    <!-- CSS -->
    <link rel="stylesheet" href="login.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <section class="container forms">

        <div class="form login">

            <div class="form-content">

                <span class="title">Inicia Sesión</span>

                <form action="procesarLogin.php" method="post">

                    <div class="field input-field">
                        <input type="email" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" autocomplete="off" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Ingresa tu Contraseña" required>
                        <i class="bx bx-hide eye-icon"></i>
                    </div>

                    <div class="field button-field">
                        <button name="submit" >Inicia Sesión</button>
                    </div>

                    <div class="form-link">
                        <span>No tienes una cuenta?
                            <a href="signup.php" class="signup-link">Créala Aquí</a>
                        </span>
                    </div>

                </form>

            </div>

        </div>

    </section>

    <!-- JS SHOW/HIDE PASSWORD -->+

     <script>

        const forms = document.querySelector('.forms'),
              pwShowHide = document.querySelectorAll('.eye-icon');

        pwShowHide.forEach(eyeIcon =>
        {
            eyeIcon.addEventListener('click', () =>
            {
                let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll('.password');

                pwFields.forEach(password =>
                {
                    if (password.type === 'password')
                    {
                        password.type = 'text';
                        eyeIcon.classList.replace('bx-hide', 'bx-show');
                    }
                    else
                    {
                        password.type = 'password';
                        eyeIcon.classList.replace('bx-show', 'bx-hide');
                    }
                })
            })
        })

    </script>
    
    
</body>
</html>