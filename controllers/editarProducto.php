<?php
include_once("./helpers/includes.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_producto = $_GET['id'];

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen_nombre = $_POST['imagen_nombre'];

    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen_temp = $_FILES['imagen']['tmp_name'];
        $imagen_nombre = $_FILES['imagen']['name'];
        $ruta_destino = "../uploads/" . $imagen_nombre;
        move_uploaded_file($imagen_temp, $ruta_destino);
    }

    if (!validarDatos($nombre, $descripcion, $precio, $imagen_nombre)) {
        mostrarMensaje("Error", "Por favor, complete todos los campos.", "error", "../pages/admin/editarProductos.php");
        exit();
    }

    $sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, imagen= '$imagen_nombre' WHERE id = $id_producto";
    $conn->ejecutar($sql);

    mostrarMensaje("Éxito", "Producto editado correctamente correctamente", "success", "../pages/admin/dashboard.php");

}
?>