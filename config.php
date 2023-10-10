<?php

session_start();
$isLoged = false;

global $isLoged;

$id = null;
$name = null;
$email = null;

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $id_role = $_SESSION["id_role"];
    $isLoged = true;

}

function redireccionar($needLoged, $isLoged)
{
    if ($needLoged && !$isLoged) {

        if ($_SESSION["id_role"] == 1) {
            header("Location: /pages/admin/dashboard.php");
            exit;
        }
        header("Location: /index.php");

    }

    if (!$needLoged && $isLoged) {
        if ($_SESSION["id_role"] == 1) {
            header("Location: /pages/admin/dashboard.php");
            exit;
        }
        header("Location: /index.php");
    }

}

?>