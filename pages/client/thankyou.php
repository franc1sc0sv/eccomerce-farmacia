<?php include_once("../../config.php") ?>

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
          <div class="col-md-12 mb-0"><a href="index.html">Inicio</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Agradecimientos</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Muchas gracias!</h2>
            <p class="lead mb-5">Tu orden se ha completado con exito. Comprobaremos los datos y te contactaremos</p>
            <p><a href="./shop.php" class="btn btn-md height-auto px-4 py-3 btn-primary">Regresar a la tienda</a></p>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("../../components/footer.php") ?>
  </div>

  <?php include_once("../../components/scripts.php") ?>

</body>

</html>