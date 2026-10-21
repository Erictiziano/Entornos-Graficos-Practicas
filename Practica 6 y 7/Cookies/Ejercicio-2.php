<?php
if (!isset($_COOKIE["contador"])) {
    $contador = 1;
} else {
    $contador = $_COOKIE["contador"] + 1;
}
setcookie("contador", $contador, time() + 3600 * 24 * 365);
?>
<html>
<head>
<title>Contador</title>
</head>
<body>
<?php
if ($contador == 1) {
    echo "Bienvenido, esta es la primera vez que visitás esta página";
} else {
    echo "Esta es tu visita número " . $contador;
}
?>
</body>
</html>
