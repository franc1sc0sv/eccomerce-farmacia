<?php include_once('./validaciones.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../../components/heads.php") ?>
</head>

<body>

  <div class="site-wrap">
    <?php include_once("../../components/nav_admin.php") ?>

    <div class="d-flex flex-column justify-content-center align-items-center" style="max-width: 520px;margin: 0 auto;">
      <h1 class="h3 mb-4 text-gray-800">Agregar productos</h1>
      <form style="width:100%" action="../../controllers/agregarProductos.php" method="post"
        enctype="multipart/form-data">

        <div class="form-group">
          <label for="nombre">Nombre del producto</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción</label>
          <textarea class="form-control" id="descripcion" name="descripcion" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label for="precio">Precio</label>
          <input max="99999999.99" type="number" class="form-control" id="precio" name="precio" step="0.01">
        </div>
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
        </div>


        <button type="submit" class="btn btn-primary">Agregar Producto</button>
      </form>
    </div>

  </div>

  <?php include_once("../../components/scripts.php") ?>


</body>

</html>