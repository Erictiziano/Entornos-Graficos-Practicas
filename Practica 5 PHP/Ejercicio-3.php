<?php
session_start(); // Siempre antes de escribir cualquier texto

if ($_POST) {
    // Guardamos los datos del visitante en la sesión
    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["amigo"]  = $_POST["amigo"];

    $para    = $_POST["amigo"];
    $asunto  = $_POST["nombre"] . " te recomienda este sitio";
    $mensaje = "<h2>Hola!</h2><p>Tu amigo <b>" . $_POST["nombre"] . "</b> te recomienda visitar nuestro sitio:</p>
                <p><a href='http://localhost/Practica-5-PHP/'>Visitar el sitio</a></p>";

    $cabeceras  = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
    $cabeceras .= "From: erictiziano333@gmail.com\r\n";

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Gracias " . $_SESSION["nombre"] . ", recomendación enviada a " . $_SESSION["amigo"];
    } else {
        echo "Error al enviar";
    }
}
?>
<h1>Recomendar el sitio a un amigo</h1>
<form method="post">
    Tu nombre: <input type="text" name="nombre" value="<?php echo $_SESSION["nombre"] ?? ""; ?>"><br>
    Email de tu amigo: <input type="email" name="amigo"><br>
    <input type="submit" value="Recomendar">
</form>