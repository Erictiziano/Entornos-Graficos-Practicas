<?php
session_start();
?>
<html>
<head>
<title>Carrito</title>
</head>
<body>
<h1>Carrito</h1>
<?php
if (isset($_SESSION['carro']) && count($_SESSION['carro']) > 0) {
    $total = 0;
    echo '<table border="1" cellpadding="5">';
    echo '<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th><th>Borrar</th></tr>';

    foreach ($_SESSION['carro'] as $id => $item) {
        $subtotal = $item['precio'] * $item['cantidad'];
        $total = $total + $subtotal;

        echo '<tr>';
        echo '<td>' . $item['producto'] . '</td>';
        echo '<td>$' . $item['precio'] . '</td>';
        echo '<td><form action="agregacar.php" method="post">';
        echo '<input type="text" name="cantidad" value="' . $item['cantidad'] . '" size="3">';
        echo '<input type="hidden" name="id" value="' . $id . '">';
        echo '<input type="submit" value="Actualizar">';
        echo '</form></td>';
        echo '<td>$' . number_format($subtotal, 2) . '</td>';
        echo '<td><a href="borracar.php?id=' . $id . '">Borrar</a></td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<p>Total de artículos: ' . count($_SESSION['carro']) . '</p>';
    echo '<p>Total: $' . number_format($total, 2) . '</p>';
} else {
    echo 'No hay productos en el carrito.';
}
?>
<p><a href="catalogo.php">Seguir comprando</a></p>
</body>
</html>
