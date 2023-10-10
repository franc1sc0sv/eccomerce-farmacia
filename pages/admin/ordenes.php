<?php

include_once('./validaciones.php');
include_once('../../controllers/config/conexion.php');

$sql = "SELECT * FROM pedidos";
$orders = $conn->consultar($sql);

$productos = [];

foreach ($orders as $order) {
    $productos[] = json_decode($order["productos"]);
}


$datos_productos = [];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../../components/heads.php") ?>
    </link>
</head>

<body>

    <div class="site-wrap">
        <?php include_once("../../components/nav_admin.php") ?>

        <div class="container">
            <h2>Lista de Órdenes</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Notas del Pedido</th>
                        <th>Productos</th> <!-- Nueva columna para mostrar productos -->
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($orders as $order) {
                        $productos = json_decode($order["productos"]);



                        echo '<tr>';
                        echo '<td>' . $order['id'] . '</td>';
                        echo '<td>' . $order['direccion'] . '</td>';
                        echo '<td>' . $order['telefono'] . '</td>';
                        echo '<td>' . $order['notasPedido'] . '</td>';
                        echo '<td><ul>';
                        foreach ($productos as $item) {
                            $dato = $conn->consultar("SELECT nombre FROM productos WHERE id = $item->id")[0];
                            echo "<li>" . $dato['nombre'] . " - " . $item->cantidad . "</li>";
                        }
                        echo '</ul></td>';
                        echo '<td><button class="btn btn-danger" onclick="deleteOrder(' . $order['id'] . ')">Eliminar Orden</button></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php include_once("../../components/scripts.php") ?>

    <script>

        function deleteOrder(orderId) {
            Swal.fire({
                title: 'Eliminar Orden',
                text: '¿Estás seguro de que deseas eliminar esta orden?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    await fetch(`../../controllers/eliminarOrden.php?id=${orderId}`)
                    Swal.fire({
                        title: 'Orden Eliminada',
                        text: 'La orden ha sido eliminada correctamente.',
                        icon: 'succes',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'ok'
                    }).then(async (result) => {
                        location.reload();
                    })
                }
            });
        }
    </script>

</body>

</html>