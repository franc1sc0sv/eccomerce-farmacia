<?php
session_start();
include "./config/conexion.php";
include "./helpers/alerts..php";

function validarDatos($nombre, $descripcion, $precio, $imagenNombre)
{
    if (empty($nombre) || empty($descripcion) || empty($precio) || empty($imagenNombre)) {
        return false; // Al menos uno de los campos está vacío
    }
    return true; // Todos los campos están llenos
}
?>