<html>
<head>
<title>Alta Ciudad</title>
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
$vSql = "SELECT Count(id) as canti FROM ciudades WHERE id='$vId'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
$vCant = mysqli_fetch_assoc($vResultado);
if ($vCant['canti'] != 0) {
    echo ("La Ciudad ya Existe<br>");
    echo ("<A href='Menu.html'>VOLVER AL ABML</A>");
}
else {
    $vSql = "INSERT INTO ciudades (id, ciudad, pais, habitantes, superficie, tieneMetro)
    values ('$vId','$vCiudad','$vPais','$vHabitantes','$vSuperficie','$vMetro')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    echo ("La Ciudad fue Registrada<br>");
    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    mysqli_free_result($vResultado);
}
mysqli_close($link);
?>
</body>
</html>
