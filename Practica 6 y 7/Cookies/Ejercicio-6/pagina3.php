<?php
session_start();
?>
<html>
<head>
<title>Página 3</title>
</head>
<body>
<?php
if (isset($_SESSION['nombre'])) {
    echo "Bienvenido " . htmlspecialchars($_SESSION['nombre']);
} else {
    echo "No tiene permitido visitar esta página.";
}
?>
</body>
</html>
