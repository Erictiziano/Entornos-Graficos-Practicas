<?php
if ($_POST) {
    $para    = "erictiziano333@gmail.com";
    $asunto  = $_POST["asunto"];
    $mensaje = "Nombre: " . $_POST["nombre"] . "<br>Email: " . $_POST["email"] . "<br>" . $_POST["mensaje"];

    $cabeceras  = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
    $cabeceras .= "From: " . $_POST["email"] . "\r\n";

    if (mail($para, $asunto, $mensaje, $cabeceras)) {
        echo "Consulta enviada";
    } else {
        echo "Error al enviar";
    }
}
?>
<h1>Contacto</h1>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="email" name="email"><br>
    Asunto: <input type="text" name="asunto"><br>
    Consulta: <textarea name="mensaje"></textarea><br>
    <input type="submit" value="Enviar">
</form>