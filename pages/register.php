<?php
include_once("../config.php");
redireccionar(false, $isLoged);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../components/heads.php") ?>
    <style>
        body {
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .form_container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 5rem auto;
        }
    </style>
</head>

<body>
    <?php include_once("../components/nav.php") ?>

    <div class="form_container">
        <h2 class="text-center mb-4">Registro</h2>
        <form method="post" action="../controllers/register.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input name="email" type="email" class="form-control" id="email"
                    placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input name="password" type="password" class="form-control" id="password"
                    placeholder="Ingrese su contraseña">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
        </form>
        <div class="bg-light rounded p-3 text-center">
            <p class="mb-0">¿Ya tienes una cuenta? <br /> <a href="./login.php" class="d-inline-block">Haz clic
                    aquí</a> para iniciar sesion</p>
        </div>
    </div>

    <?php include_once("../components/scripts.php") ?>
</body>

</html>