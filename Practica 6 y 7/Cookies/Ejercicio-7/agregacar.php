<?php
session_start();
include("conexion.php");

$id = (int)$_REQUEST['id'];

$cantidad = 1;
if (isset($_POST['cantidad'])) {
    $cantidad = (int)$_POST['cantidad'];
    if ($cantidad < 1) {
        $cantidad = 1;
    }
}

$resultado = mysqli_query($link, "SELECT * FROM catalogo WHERE id = $id");
$fila = mysqli_fetch_array($resultado);

if ($fila) {
    $_SESSION['carro'][$id] = array(
        'producto' => $fila['producto'],
        'precio'   => $fila['precio'],
        'cantidad' => $cantidad
    );
}

if (isset($_POST['cantidad'])) {
    header("Location: vercarrito.php");
} else {
    header("Location: catalogo.php");
}
?>
