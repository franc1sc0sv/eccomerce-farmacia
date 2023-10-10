<?php
include_once("./helpers/includes.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["email"]) || !isset($_POST["password"])) {
        mostrarMensaje("Error", "Campos requeridos", "error", "/pages/login.php");
    }

    if (empty($_POST["email"]) || empty($_POST["password"])) {
        mostrarMensaje("Error", "Por favor, complete todos los campos.", "error", "/pages/login.php");
    }
    $correo = $_POST["email"];
    $contrasena = $_POST["password"];

    $sql = "SELECT id, id_role, nombre_completo FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
    $rows = $conn->rowCount($sql);

    if ($rows == 1) {
        $datos = $conn->consultar($sql)[0];

        $_SESSION["id_role"] = $datos["id_role"];
        $_SESSION['id'] = $datos['id'];
        $_SESSION['name'] = $datos["nombre_completo"];
        $_SESSION['email'] = $correo;

        $ruta = $datos["id_role"] == 1 ? "../pages/admin/dashboard.php" : "../index.php";
        mostrarMensaje("Éxito", "Has iniciado sesion correctamente", "success", $ruta);
    } else {
        mostrarMensaje("Error", "Usuario o contraseña incorrectos", "error", "/pages/login.php");
    }
}
?>