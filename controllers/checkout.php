<?php
include_once("./helpers/includes.php");

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['c_address']) && isset($data['c_phone']) && isset($data['c_order_notes']) && ($data['productos'])) {
        $c_address = $data['c_address'];
        $c_phone = $data['c_phone'];
        $c_order_notes = $data['c_order_notes'];
        $products = json_encode($data['productos']);

        $productos = json_encode($products);
        $id = $_SESSION['id'];


        if (empty($c_address) || empty($c_phone) || empty($productos) || empty($c_order_notes)) {
            echo json_encode(array('success' => false, 'message' => 'No se permiten campos vacios.', 'type' => 'error'));
            exit;
        }

        try {
            $sql = "INSERT INTO pedidos (direccion, telefono, notasPedido, productos, id_usuario) VALUES ('$c_address', '$c_phone', '$c_order_notes', $productos, $id)";
            $conn->ejecutar($sql);


            echo json_encode(array('success' => true, 'message' => 'Datos guardados exitosamente.', 'type' => 'success'));
        } catch (PDOException $e) {
            echo json_encode(array('success' => false, 'message' => 'Se produjo un error: ' . $e->getMessage(), 'type' => 'error'));
        }
    } else {
        echo json_encode(array('success' => false, 'message' => 'Faltan campos obligatorios.', 'type' => 'error'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Método de solicitud no válido.', 'type' => 'error'));
}
?>