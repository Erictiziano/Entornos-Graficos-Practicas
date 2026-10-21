<?php
session_start();
include("conexion.php");

$mail = mysqli_real_escape_string($link, $_POST['mail']);
$sql = "SELECT * FROM alumnos WHERE mail = '$mail'";
$resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
$fila = mysqli_fetch_array($resultado);
?>
<html>
<head>
<title>Página 2</title>
</head>
<body>
<?php
if (mysqli_num_rows($resultado) == 0) {
    unset($_SESSION['nombre']);
    echo "Alumno inexistente...!!!<br>";
} else {
    $_SESSION['nombre'] = $fila['nombre'];
    echo "Alumno encontrado.<br>";
}
?>
<a href="pagina3.php">Ingresar a la tercera página</a>
</body>
</html>
