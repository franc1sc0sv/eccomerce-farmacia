<div class="col-sm-6 col-lg-4 text-center item mb-4">
    <img style="height: 250px;margin: 1rem 0" src="/uploads/<?php echo $producto["imagen"] ?>" alt="Imagen">
    <h3 class="text-dark">
        <?php echo $producto["nombre"] ?>
    </h3>
    <p style="text-transform: capitalize;">
        <?php echo $producto["descripcion"] ?>
    </p>
    <p>
        <?php echo $producto["precio"] ?>
    </p>

    <button onclick="addProduct(<?php echo $producto['id'] ?>)"
        style="margin:0 1rem;color: #343a40;background-color: transparent;background-image: none;border-color: #343a40;"
        class="btn" href="/pages/login.php">
        Agregar la carrito
    </button>
</div>