<html>
<head>
<title>Modificacion</title>
</head>
<body>
<?php
include("conexion.inc");
$vId = $_POST['id'];
$vSql = "SELECT * FROM ciudades WHERE id='$vId'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
$fila = mysqli_fetch_array($vResultado);
if (mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='FormModiIni.html'>Continuar</A>");
}
else {
?>
<form action="Modi.php" method="POST" name="FormModi">
 <table>
  <tr><td>Id:</td>
      <td><input type="text" name="id" value="<?php echo($fila['id']); ?>"></td></tr>
  <tr><td>Ciudad:</td>
      <td><input type="text" name="ciudad" value="<?php echo($fila['ciudad']); ?>"></td></tr>
  <tr><td>País:</td>
      <td><input type="text" name="pais" value="<?php echo($fila['pais']); ?>"></td></tr>
  <tr><td>Habitantes:</td>
      <td><input type="text" name="habitantes" value="<?php echo($fila['habitantes']); ?>"></td></tr>
  <tr><td>Superficie:</td>
      <td><input type="text" name="superficie" value="<?php echo($fila['superficie']); ?>"></td></tr>
  <tr><td>Tiene Metro:</td>
      <td><input type="text" name="tieneMetro" maxlength="1" value="<?php echo($fila['tieneMetro']); ?>"></td></tr>
  <tr><td colspan="2" align="center"><input type="submit" name="Submit" value="Modificar"></td></tr>
 </table>
</form>
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
