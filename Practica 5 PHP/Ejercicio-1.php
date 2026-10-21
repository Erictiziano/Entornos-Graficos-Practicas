<?php
$para    = "erictiziano333@gmail.com";
$asunto  = "Prueba de correo HTML";
$mensaje = "<h1>Hola</h1><p>Este es un correo con <b>formato HTML</b>.</p>";

$cabeceras  = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
$cabeceras .= "From: erictiziano333@gmail.com\r\n";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado";
} else {
    echo "Error al enviar";
}