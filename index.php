<?php
include_once("./config.php");
include_once("./controllers/config/conexion.php");

$sql = "SELECT * FROM productos ORDER BY id DESC LIMIT 3;";
$datos = $conn->consultar($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("./components/heads.php") ?>
</head>

<body>

  <div class="site-wrap">

    <?php include_once("./components/nav.php") ?>

    <div class="site-blocks-cover" style="background-image: url('assets/images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Medicina Efectiva, Nueva Medicina Todos los Días</h2>
              <h1>Bienvenido a Pharma</h1>
              <p>
                <a href="/pages/client/shop.php" class="btn btn-primary px-5 py-3">Comprar Ahora</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Grandes ofertas <br> en nuestros productos</h5>
                <p>
                  Oferta por tiempo limitado. ¡Aprovecha ahora!
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Variedad de productos</h5>
                <p>
                  Descubre nuestros prodructos de la mejor calidad
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Calidad certificada</h5>
                <p>
                  Compra de la mano de los mejores distribuidores
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" style="padding: 0;">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Productos Populares</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($datos as $producto) {
            include("./components/product.php");
          } ?>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="tienda.html" class="btn btn-primary px-4 py-3">Ver Todos los Productos</a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">

              <div class="testimonio">
                <blockquote>
                  <img src="assets/images/person_1.jpg" alt="Imagen" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Estoy muy contento con los productos de Pharma. Han mejorado mi salud de forma notable. ¡Muy
                    recomendado!&rdquo;</p>
                </blockquote>
                <p>&mdash; Kelly Holmes</p>
              </div>

              <div class="testimonio">
                <blockquote>
                  <img src="assets/images/person_2.jpg" alt="Imagen" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;La calidad de los productos de Pharma es excepcional. Me han ayudado mucho en mi día a día.
                    ¡Gracias, Pharma!&rdquo;</p>
                </blockquote>
                <p>&mdash; Rebecca Morando</p>
              </div>

              <div class="testimonio">
                <blockquote>
                  <img src="assets/images/person_3.jpg" alt="Imagen" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Los productos de Pharma han marcado una diferencia significativa en mi bienestar. ¡No puedo
                    recomendarlos lo suficiente!&rdquo;</p>
                </blockquote>
                <p>&mdash; Lucas Gallone</p>
              </div>

              <div class="testimonio">
                <blockquote>
                  <img src="assets/images/person_4.jpg" alt="Imagen" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Desde que comencé a utilizar los productos de Pharma, mi vida ha cambiado para mejor. ¡Son
                    increíbles!&rdquo;</p>
                </blockquote>
                <p>&mdash; Andrew Neel</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("./components/footer.php") ?>
  </div>

  <?php include_once("./components/scripts.php") ?>

</body>

</html>