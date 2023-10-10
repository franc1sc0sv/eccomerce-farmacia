<?php
include_once("./helpers/includes.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = floatval($_POST["precio"]);

    // Procesar la imagen
    $imagen = $_FILES["imagen"];
    $imagenNombre = $imagen["name"];
    $imagenTmpPath = $imagen["tmp_name"];
    $imagenDestino = "../uploads/" . $imagenNombre;

    move_uploaded_file($imagenTmpPath, $imagenDestino);

    if (!validarDatos($nombre, $descripcion, $precio, $imagenNombre)) {
        mostrarMensaje("Error", "Por favor, complete todos los campos.", "error", "../pages/admin/agregarProductos.php");
        exit();
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imagenNombre')";

    if ($conn->ejecutar($sql)) {
        mostrarMensaje("Éxito", "Producto agregado correctamente", "success", "../pages/admin/dashboard.php");
    } else {
        mostrarMensaje("Error", "Error con la solicitud", "error", "../pages/admin/agregarProductos.php");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>