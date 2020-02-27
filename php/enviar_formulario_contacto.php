<?php

require_once 'conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentarios = $_POST['comentarios'];

function enviar_correo($nombre,$email,$telefono,$comentarios)
{
    // Varios destinatarios
    $para  = 'hojasdevidaelite@gmail.com' . ', '; // atención a la coma
    $para .= 'admin@entrepreneur.com.co' . ', '; // atención a la coma
    $para .= 'info@entrepreneur.com.co' . ', '; // atención a la coma
    $para .= 'cs@elitecleaningconcepts.com' . ', '; // atención a la coma
    $para .= 'hr@elitecleaningconcepts.com' . ', '; // atención a la coma
    $para .= 'hr@entrepreneur.com.co' . ', '; // atención a la coma
    $para .= 'systems@entrepreneur.com.co';

    // título
    $título = 'Formulario de contacto';

    // mensaje
    $mensaje = '
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    </head>
    <body>
    <p>Nuevo mensaje de pagina web</p>
    <table>
        <tr>
        <th>Nombre</th><th>Email</th><th>Telefono</th>
        </tr>
        <tr>
        <td>'.$nombre.'</td><td>'.$email.'</td><td>'.$telefono.'</td>
        </tr>
    </table>
    <p><b>Mensaje:</b><p>
    <p>'.$comentarios.'</p>
    <br>
    </body>
    </html>
    ';
    
    #$email_from = 'cs@elitecleaningconcepts.com';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: Cs <' . $email . '>' . "\r\n";
    $cabeceras .= 'From: Recordatorio <' . $email . '>' . "\r\n";
    $cabeceras .= 'From: Elite Cleaning Concepts ' . $email . "\r\n";

    // Enviarlo
    if(mail($para, $título, $mensaje, $cabeceras))
        echo '<script>alert("Submitted Form");window.location.href="../contact_us.html";</script>';
}

enviar_correo($nombre,$email,$telefono,$comentarios);


