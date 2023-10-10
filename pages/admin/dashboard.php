<?php

include_once('./validaciones.php');
include_once('../../controllers/config/conexion.php');

$sql = "SELECT * FROM productos";

$rowCount = $data = $conn->rowCount($sql);
$data = $conn->consultar($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../../components/heads.php") ?>
</head>

<body id="page-top">

  <div class="site-wrap">
    <?php include_once("../../components/nav_admin.php") ?>

    <div class="container" style="display: flex;flex-direction: column;gap: 1rem;">
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>Lista de Productos</h2>
        <a href="agregarProductos.php" class="btn btn-success">Agregar productos</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($rowCount > 0) {
            foreach ($data as $producto) {
              echo '<tr>';
              echo '<td>' . $producto['id'] . '</td>';
              echo '<td>' . $producto['nombre'] . '</td>';
              echo '<td>' . $producto['descripcion'] . '</td>';
              echo '<td>' . $producto['precio'] . '</td>';
              echo '<td><a href="#" class="btn btn-primary view-image-btn" data-image="../../uploads/' . $producto['imagen'] . '">Ver imagen</a></td>';
              echo '<td>';
              echo '<a style="margin: 0 10px;" href="#" class="btn btn-danger delete-btn" data-id="' . $producto['id'] . '">Eliminar</a>';
              echo '<a href="editarProductos.php?id=' . $producto['id'] . '" class="btn btn-primary">Editar</a>';
              echo '</td>';
              echo '</tr>';
            }
          }

          if ($rowCount == 0) {
            echo '<tr><td colspan="7">No hay productos disponibles</td></tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include_once("../../components/scripts.php") ?>

  <script>
    $(document).ready(function () {
      $(".delete-btn").click(function (e) {
        e.preventDefault();
        const productId = $(this).data("id");

        Swal.fire({
          title: "¿Estás seguro?",
          text: "Esta acción no se puede deshacer",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Sí, eliminar",
          cancelButtonText: "Cancelar"
        }).then((result) => {
          if (result.isConfirmed) {
            // Redirige a la página de eliminación con el ID del producto
            window.location.href = "../../controllers/eliminarProducto.php?id=" + productId;
          }
        });
      });
    });

    $(".view-image-btn").click(function (e) {
      e.preventDefault();
      const imageUrl = $(this).data("image");

      Swal.fire({
        title: "Imagen del Producto",
        imageUrl: imageUrl,
        imageAlt: "Imagen del producto"
      });
    });
  </script>


</body>

</html>