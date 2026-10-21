<?php

if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    setcookie("usuario", $usuario, time() + 3600 * 24 * 30);
} else {
    if (isset($_COOKIE["usuario"])) {
        $usuario = $_COOKIE["usuario"];
    }
}
?>
<html>
<head>
<title>Nombre de usuario</title>
</head>
<body>
<form action="usuario.php" method="post">
    Nombre de usuario:
    <input type="text" name="usuario">
    <input type="submit" value="Guardar">
</form>
<?php
if (isset($usuario)) {
    echo "Último nombre de usuario ingresado: " . htmlspecialchars($usuario);
}
?>
</body>
</html>
