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
          <div class="col-md-12 mb-0">
            <a href="/index.php">Inicio</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Carrito</strong>
          </div>
        </div>
      </div>
    </div>

    <div style="padding:0 0 5rem 0" class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody id="products_container">
                  <!-- <tr>
                    <td class="product-thumbnail">
                      <img src="/assets/images/product_02.png" alt="Image" class="img-fluid" />
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Ibuprofen</h2>
                    </td>
                    <td>$55.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">
                            &minus;
                          </button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1" />
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">
                            &plus;
                          </button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <a href="#" class="btn btn-primary height-auto btn-sm">X</a>
                    </td>
                  </tr> -->
                  <!-- 
                  <tr>
                    <td class="product-thumbnail">
                      <img src="/assets/images/product_01.png" alt="Image" class="img-fluid" />
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Bioderma</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">
                            &minus;
                          </button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1" />
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">
                            &plus;
                          </button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <a href="#" class="btn btn-primary height-auto btn-sm">X</a>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </form>
          <p id="message"></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                <a href="./shop.php" class="btn btn-outline-primary btn-md btn-block">
                  Continua comprando
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total del carrtito</h3>
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong id="subtotal" class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong id="total" class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <button class="btn btn-primary btn-lg btn-block" onclick="goCheckOut()">
                    Proceder con el pago
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once("../../components/footer.php") ?>
  </div>
  <?php include_once("../../components/scripts.php") ?>
  <script src=" /resources/js/CRUD_CART.js"></script>

</body>

</html>