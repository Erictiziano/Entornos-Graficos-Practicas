<?php
session_start();

if (!isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] = 1;
} else {
    $_SESSION["visitas"]++;
}

echo "<h1>Contador de páginas</h1>";
echo "<p>Páginas visitadas en esta sesión: " . $_SESSION["visitas"] . "</p>";
echo "<a href=''>Recargar</a>";
?>