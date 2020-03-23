<?php

require_once "php/availability/funciones_disponibilidad.php";

$conexion = new mysqli('localhost','root','','handy');

$hour = $conexion->real_escape_string($_POST['hora']);
$date = $conexion->real_escape_string($_POST['fecha']);
$description = $conexion->real_escape_string($_POST['descripcion']);
$handy_type = $conexion->real_escape_string($_POST['handy_type']);
$address = $conexion->real_escape_string($_POST['direccion']);
$city = $conexion->real_escape_string($_POST['ciudad']);
$province = $conexion->real_escape_string($_POST['estado']);
$name = $conexion->real_escape_string($_POST['nombre']);
$lastname = $conexion->real_escape_string($_POST['apellido']);
$email = $conexion->real_escape_string($_POST['email']);
$phone = $conexion->real_escape_string($_POST['telefono']);

$sql = "INSERT INTO schedule (hour,date,description,handy_type,address,city,province,name,lastname,email,phone) VALUES ('$hour','$date','$description','$handy_type','$address','$city','$province','$name','$lastname','$email','$phone')";

$conexion->query($sql);
$condado = null;

$tipo_handy = $_POST['handy_type'];
$descripcion_handy = $_POST['descripcion_handy'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$estado = $_POST['estado'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$en_sitio = $_POST['en_sitio'];

$asunto = "New handy service order";

//se construye el mensaje html a partir de los datos
$array_datos = array(
    $tipo_handy,
    $descripcion_handy,
    $fecha,
    $hora,
    $direccion . ", " . $condado,
    $ciudad,
    $estado,
    $nombre . " " . $apellido,
    $email,
    $telefono,
    ($en_sitio? ", I will be on site." : ", I won't be on site.")
);
$mensaje = construir_mensaje_html($array_datos);

//se envia el correo al tecnico de handy y al cliente    
$result = enviar_correo($email,$asunto,$mensaje);

header("Location:thankyou.php");