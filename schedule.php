<?php

$conexion = new mysqli('localhost','root','','handy');

$hour = $conexion->real_escape_string($_POST['hour']);
$date = $conexion->real_escape_string($_POST['date']);
$description = $conexion->real_escape_string($_POST['description']);
$handy_type = $conexion->real_escape_string($_POST['handy_type']);
$address = $conexion->real_escape_string($_POST['address']);
$city = $conexion->real_escape_string($_POST['city']);
$province = $conexion->real_escape_string($_POST['province']);
$name = $conexion->real_escape_string($_POST['name']);
$lastname = $conexion->real_escape_string($_POST['lastname']);
$email = $conexion->real_escape_string($_POST['email']);
$phone = $conexion->real_escape_string($_POST['phone']);

$sql = "INSERT INTO schedule (hour,date,description,handy_type,address,city,province,name,lastname,email,phone) VALUES ('$hour','$date','$description','$handy_type','$address','$city','$province','$name','$lastname','$email','$phone')";

$conexion->query($sql);