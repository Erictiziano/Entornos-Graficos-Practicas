<html>
<head>
<title>Listado completo</title>
</head>
<body>
<?php
include("conexion.inc");
$vSql = "SELECT * FROM ciudades";
$vResultado = mysqli_query($link, $vSql);
?>
<table border=1>
<tr>
 <td><b>Id</b></td>
 <td><b>Ciudad</b></td>
 <td><b>País</b></td>
 <td><b>Habitantes</b></td>
 <td><b>Superficie</b></td>
 <td><b>Tiene Metro</b></td>
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['id']); ?></td>
 <td><?php echo ($fila['ciudad']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['tieneMetro']); ?></td>
</tr>
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</table>
<p align="center"><a href="Menu.html">Volver al menú del ABML</a></p>
</body>
</html>
