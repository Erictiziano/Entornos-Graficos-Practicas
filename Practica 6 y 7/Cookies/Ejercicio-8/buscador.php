<?php
include("conexion.php");

$palabra = mysqli_real_escape_string($link, $_POST['Palabra']);
?>
<html>
<head>
<title>Resultados</title>
</head>
<body>
<?php
if ($palabra == "") {
    echo "Ingrese una palabra para buscar.";
} else {
    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$palabra%'";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    if (mysqli_num_rows($resultado) == 0) {
        echo "No hay resultados respecto a la palabra que busca.";
    } else {
        echo "<strong>RESULTADOS DE BÚSQUEDA</strong><br><br>";
        while ($fila = mysqli_fetch_array($resultado)) {
            echo $fila['canciones'] . "<br>";
        }
    }
}
?>
<p><a href="formulario.html">Volver al buscador de canciones</a></p>
</body>
</html>
