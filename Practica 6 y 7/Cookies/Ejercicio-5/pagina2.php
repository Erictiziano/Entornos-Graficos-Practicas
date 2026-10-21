<?php
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave'] = $_POST['clave'];
?>
<html>
<head>
<title>Página 2</title>
</head>
<body>
Se crearon las variables de sesión.
<br>
<a href="pagina3.php">Ir a la tercera página</a>
</body>
</html>
