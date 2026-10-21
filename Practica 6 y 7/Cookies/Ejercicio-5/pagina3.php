<?php
session_start();
?>
<html>
<head>
<title>Página 3</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])) {
    echo "Nombre de usuario: " . htmlspecialchars($_SESSION['usuario']) . "<br>";
    echo "Clave: " . htmlspecialchars($_SESSION['clave']);
} else {
    echo "No hay datos guardados en la sesión.";
}
?>
</body>
</html>
