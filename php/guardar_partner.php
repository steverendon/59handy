<?php

require_once 'conexion.php';

$nombre = $conexion->real_escape_string($_POST['nombre']);
$apellido = $conexion->real_escape_string($_POST['apellido']);
$email = $conexion->real_escape_string($_POST['email']);
$servicio = $conexion->real_escape_string($_POST['servicio']);
$cv_tamanio = $_FILES['cv']['size'];
$cv_tipo = $_FILES['cv']['type'];
$cv_archivo = $_FILES['cv']['name'];

$prefijo = substr(md5(uniqid(rand())),0,6); 

if($cv_archivo!="")
{
    $destino = "../hojas_de_vida/" . $prefijo . "_" . $cv_archivo;
    $destino2 = $prefijo . "_" . $cv_archivo;
    if(copy($_FILES['cv']['tmp_name'],$destino))
    {
        $sql="INSERT INTO cv VALUES(NULL,'$nombre','$apellido','$email','$servicio','$destino2')";
        if($conexion->query($sql))
            enviar_correo($nombre,$apellido,$email,$servicio,$destino2);
            header("location:../gracias.html");
    }
}

function enviar_correo($nombre,$apellido,$email,$servicio,$destino2)
{
    // Varios destinatarios
    $para  = 'hojasdevidaelite@gmail.com' . ', '; // atención a la coma
    $para .= 'admin@entrepreneur.com.co' . ', '; // atención a la coma
    $para .= 'info@entrepreneur.com.co' . ', '; // atención a la coma
    $para .= 'cs@elitecleaningconcepts.com' . ', '; // atención a la coma
    $para .= 'systems@entrepreneur.com.co';

    // título
    $título = 'Mail enviado desde pagina web';

    // mensaje
    $mensaje = '
    <html>
    <head>
    <title></title>
    </head>
    <body>
    <p>Nueva hoja de vida</p>
    <table>
        <tr>
        <th>Nombre</th><th>Apellido</th><th>Email</th><th>Servicio</th>
        </tr>
        <tr>
        <td>'.$nombre.'</td><td>'.$apellido.'</td><td>'.$email.'</td><td>'.$servicio.'</td>
        </tr>
    </table>
    <br>
    <a href="https://elitecleaningconcepts.com/hojas_de_vida/descargar.php?archivo='.$destino2.'">Enlace de descarga</a>
    <p>O copie y pegue el siguiente enlace en su navegador: https://elitecleaningconcepts.com/hojas_de_vida/descargar.php?archivo='.$destino2.'</p>
    </body>
    </html>
    ';
    
    $email_from = 'cs@elitecleaningconcepts.com';

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'From: Elite Cleaning Concepts ' . $email_from . "\r\n";

    // Enviarlo
    mail($para, $título, $mensaje, $cabeceras);
}


