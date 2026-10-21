<?php
session_start();

$id = (int)$_GET['id'];

unset($_SESSION['carro'][$id]);

header("Location: catalogo.php");
?>
