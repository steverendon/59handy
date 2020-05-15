<?php

$conexion = new mysqli("localhost", "handy_systems", "Bs7DfsxLnzFx", "handy_disponibilidad");
$zipcode = $_POST['zipcode'];

function ingresar_zipcode($zipcode, $conexion)
{

$sql = "INSERT INTO zipcode (zipcode) VALUES ($zipcode)";

$conexion->query($sql);

}

ingresar_zipcode($zipcode, $conexion);