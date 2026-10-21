<?php
if (isset($_POST["titular"])) {
    $titular = $_POST["titular"];
    setcookie("titular", $titular, time() + 3600 * 24 * 30);
} else {
    if (isset($_COOKIE["titular"])) {
        $titular = $_COOKIE["titular"];
    }
}
?>
<html>
<head>
<title>El Diario</title>
</head>
<body>
<h1>El Diario</h1>

<form action="periodico.php" method="post">
    Elegí qué titular querés ver:<br>
    <input type="radio" name="titular" value="politica"> Noticia política<br>
    <input type="radio" name="titular" value="economica"> Noticia económica<br>
    <input type="radio" name="titular" value="deportiva"> Noticia deportiva<br>
    <input type="submit" value="Guardar">
</form>

<hr>

<?php
if (isset($titular) && $titular == "politica") {
    echo "<h2>Política: el Congreso comenzó el debate de un nuevo proyecto de ley</h2>";
} elseif (isset($titular) && $titular == "economica") {
    echo "<h2>Economía: la inflación del mes fue menor a la esperada</h2>";
} elseif (isset($titular) && $titular == "deportiva") {
    echo "<h2>Deportes: el equipo local ganó el clásico y es líder del torneo</h2>";
} else {
    echo "<h2>Política: el Congreso comenzó el debate de un nuevo proyecto de ley</h2>";
    echo "<h2>Economía: la inflación del mes fue menor a la esperada</h2>";
    echo "<h2>Deportes: el equipo local ganó el clásico y es líder del torneo</h2>";
}
?>

<p><a href="borrar.php">Borrar la cookie</a></p>
</body>
</html>
