<?php


$zipcodes = [33401,33402,33404,33405,33406,33407,33409,33416,33417,33419,33421,33422,33480,33458,33468,33469,33410,33420,33477,33403,33408,33419,33401,33402,33404,33407,33409,33417,33422,33401,33405,33406,33416,33411,33413,33415,33460,33461,33462,33463,33464,33465,33466,33454,33463,33467,33472,33424,33425,33426,33435,33436,33482,33444,33445,33483,33487,33444,33445,33499,33446,33496,33498,33427,33429,33431,33432,33481,33486,33428,33433,33434,33488,33497];

$zipcode = $_GET['zipcode'];

if ( in_array( $zipcode, $zipcodes ) ) require_once "form.php";
else require_once "zipcode.php";