<?php
if (isset($_POST["estilo"])) {
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
} else {
    
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cookies en PHP</title>
<?php

if (isset($estilo)) {
    echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
}
?>
</head>
<body>
Ejemplo de uso de cookies en PHP para almacenar la hoja de estilos CSS que queremos utilizar.
<form action="ejemplo_cookies.php" method="post">
    Aquí puedes seleccionar el estilo (color de fondo) que deseas para la página:
    <br>
    <select name="estilo">
        <option value="verde">Verde</option>
        <option value="rosa">Rosa</option>
        <option value="negro">Negro</option>
    </select>
    <input type="submit" value="Actualizar el estilo">
</form>
</body>
</html>
