<?php
include_once("../../config.php");
include_once("../../controllers/config/conexion.php");

$datos = $conn->consultar("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../../components/heads.php") ?>
</head>

<body>
  <div class="site-wrap">
    <?php include_once("../../components/nav.php") ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Tienda</strong></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <?php foreach ($datos as $producto) {
          include("../../components/product.php");
        } ?>
      </div>
    </div>

    <?php include_once("../../components/footer.php") ?>
  </div>

  <?php include_once("../../components/scripts.php") ?>
</body>

</html>