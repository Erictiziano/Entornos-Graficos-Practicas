<html>
<head>
<title>Modificacion</title>
</head>
<body>
<?php
include("conexion.inc");
$vId = $_POST['id'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vMetro = $_POST['tieneMetro'];
$vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHabitantes',
superficie='$vSuperficie', tieneMetro='$vMetro' where id='$vId'";
mysqli_query($link, $vSql) or die (mysqli_error($link));
echo ("La Ciudad fue Modificada<br>");
echo ("<A href='Menu.html'>Volver al Menu del ABML</A>");
mysqli_close($link);
?>
</body>
</html>
