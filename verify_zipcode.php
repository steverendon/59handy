<?php

$zipcodes = [33401,33402,33404,33405,33406,33407,33409,33416,33417,33419,33421,33422,33480];

$zipcode = $_GET['zipcode'];

if ( in_array($zipcode, $zipcodes) ) require_once "form.php";
else require_once "zipcode.php";