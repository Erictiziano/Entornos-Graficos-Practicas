<?php
session_start();
include("conexion.php");

$resultado = mysqli_query($link, "SELECT * FROM catalogo ORDER BY producto") or die(mysqli_error($link));
?>
<html>
<head>
<title>Catálogo</title>
</head>
<body>
<h1>Catálogo</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Carrito</th>
    </tr>
    <?php while ($fila = mysqli_fetch_array($resultado)) { ?>
    <tr>
        <td><?php echo $fila['producto']; ?></td>
        <td>$<?php echo $fila['precio']; ?></td>
        <td>
            <?php
            if (isset($_SESSION['carro'][$fila['id']])) { ?>
                <a href="borracar.php?id=<?php echo $fila['id']; ?>">Quitar del carrito</a>
            <?php } else { ?>
                <a href="agregacar.php?id=<?php echo $fila['id']; ?>">Agregar al carrito</a>
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
</table>
<p><a href="vercarrito.php">Ver carrito</a></p>
</body>
</html>
