<?php

    include 'connection.php';
    session_start();
    error_reporting(0);

    if (isset($_SESSION['name']))
    {
        header("Location: index.html");
    }

    if (isset($_POST['submit']))
    {
       $email = $_POST['email'];
        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
    
        if ($password == $cpassword)
        {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);

            if (!$result -> num_rows > 0)
            {
                $sql = "INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$password')";
                $result = mysqli_query($conn, $sql);

                if ($result)
                {
                    header("Location: login.php");
                    $_POST['email'] = "";
                     $_POST['name'] = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                }
                else
                {
                    echo "<script>alert('Algo funcionó incorrectamente, intenta de nuevo')</script>";
                }
            }
            else
            {
                echo "<script>alert('El Correo Electrónico ya esta registrado!')</script>";
            }
        }
        else
        {
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu cuenta - IntFoot</title>

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

                <span class="title">Crea tu cuenta</span>

                <form action="" method="post">

                    <div class="field input-field">
                        <input type="text" name="name" id="name" placeholder="Ingresa tu Nombre Completo" autocomplete="off" required>
                    </div>

                    <div class="field input-field">
                        <input type="email" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" autocomplete="off" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Ingresa tu Contraseña" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Confirma tu Contraseña" required>
                        <i class="bx bx-hide eye-icon"></i>
                    </div>

                    <div class="field button-field">
                        <button name="submit">Crear Cuenta</button>
                    </div>

                    <div class="form-link">
                        <span>Ya tienes una cuenta?
                            <a href="login.php" class="signup-link">Inicia Sesión Aquí</a>
                        </span>
                    </div>

                </form>

            </div>

        </div>

    </section>

    <!-- JS SHOW/HIDE PASSWORD -->

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