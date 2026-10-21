<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include("conexion.inc");
$vId = $_POST['id'];
$vSql = "SELECT * FROM ciudades WHERE id='$vId'";
$vResultado = mysqli_query($link, $vSql);
if (mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='FormBajaIni.html'>Continuar</A>");
}
else {
    // Arma la instrucción SQL y luego la ejecuta
    $vSql = "DELETE FROM ciudades WHERE id='$vId'";
    mysqli_query($link, $vSql);
    echo ("La Ciudad fue Borrada<br>");
    echo ("<A href='Menu.html'>Volver al Menu del ABML</A>");
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
</body>
</html>
