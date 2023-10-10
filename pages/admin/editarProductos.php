<?php
include_once('./validaciones.php');
include_once('../../controllers/config/conexion.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_producto = $_GET['id'];

    $sql = "SELECT * FROM productos WHERE id = $id_producto";
    $rowCount = $conn->rowCount($sql);

    if ($rowCount < 0) {
        header("Location: ./index.php");
        exit();
    }

    $datos = $conn->consultar($sql)[0];


} else {
    header("Location: ./index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../../components/heads.php") ?>
</head>

<body id="page-top">

    <div class="site-wrap">
        <?php include_once("../../components/nav_admin.php") ?>

        <div class="d-flex flex-column justify-content-center align-items-center"
            style="max-width: 520px;margin: 0 auto;">
            <h1 class="h3 mb-4 text-gray-800">Editar producto</h1>
            <form style="width:100%" action="../../controllers/editarProducto.php?id=<?php echo $id_producto ?>"
                method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nombre">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                        value="<?php echo $datos['nombre']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4"
                        required><?php echo $datos['descripcion']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input max="99999999.99" type="number" class="form-control" id="precio" name="precio" step="0.01"
                        value="<?php echo $datos['precio']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen - <a href="#" class="view-image-btn"
                            data-image="../../uploads/<?php echo $datos['imagen'] ?>">Ver imagen
                            actual</a></label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*">
                    <input name="imagen_nombre" type="text" hidden value="<?php echo $datos['imagen'] ?>">

                </div>

                <button type="submit" class="btn btn-primary">Editar Producto</button>
            </form>
        </div>

        <?php include_once("../../components/scripts.php") ?>
        <script>
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
    </div>


</body>

</html>