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
            <strong class="text-black">Pago</strong>
          </div>
        </div>
      </div>
    </div>

    <form id="form_check" class="container">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Detalles de facturación</h2>
          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Dirección">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_phone" class="text-black">Teléfono <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Número de teléfono">
              </div>
            </div>

            <div class="form-group">
              <label for="c_order_notes" class="text-black">Notas del pedido</label>
              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                placeholder="Escribe tus notas aquí..."></textarea>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Tu pedido</h2>
              <div class="p-3 p-lg-5 border">
                <table class="table site-block-order-table mb-5">
                  <thead>
                    <th>Producto</th>
                    <th>Total</th>
                  </thead>
                  <tbody id="products_container">
                  </tbody>
                </table>
                <div class="border mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                      aria-expanded="false" aria-controls="collapsepaypal">El pago</a></h3>
                  <div class="collapse" id="collapsepaypal">
                    <div class="py-2 px-4">
                      <p class="mb-0">Realice su pago directamente con nuestro agente cuando reciba los productos a la
                        puerta de su casa.</p>
                    </div>
                  </div>
                </div>
                <div class="border mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal1" role="button"
                      aria-expanded="false" aria-controls="collapsepaypal1">Los impuestos</a></h3>
                  <div class="collapse" id="collapsepaypal1">
                    <div class="py-2 px-4">
                      <p class="mb-0">Al subtotal se le agrega un 10% del precio para curbrir costes de envio e
                        impuestos</p>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-lg btn-block">Realizar
                    pedido</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>


    <?php include_once("../../components/footer.php") ?>
  </div>
  <?php include_once("../../components/scripts.php") ?>
  <script src="/resources/js/checkout.js"></script>

  <script>
    const form = document.getElementById('form_check');

    form.addEventListener('submit', async e => {
      e.preventDefault();

      const c_address = document.getElementById('c_address').value;
      const c_phone = document.getElementById('c_phone').value;
      const c_order_notes = document.getElementById('c_order_notes').value;

      const productsData = JSON.parse(localStorage.getItem('carritoPHARMA'))

      const formData = {
        c_address,
        c_phone,
        c_order_notes,
        productos: productsData
      };

      try {
        const response = await fetch('/controllers/checkout.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(formData)
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const responseData = await response.json();

        if (responseData.success) {
          localStorage.setItem("carritoPHARMA", JSON.stringify([]))
          Swal.fire({
            title: 'Transaccion exitosa',
            text: responseData.message,
            type: 'success'
          }).then(() => {
            window.location = 'thankyou.php';
          });
        } else {
          Swal.fire({
            title: 'Error',
            text: responseData.message,
            type: 'error'
          });
        }

      } catch (error) {
        console.error('Error:', error);
        Swal.fire({
          title: 'Error',
          text: 'An error occurred. Please try again later.',
          type: 'error'
        });
      }

    });
  </script>


</body>

</html>