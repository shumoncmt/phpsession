<?php

//Parse Error ( Syntax Error)

//ech "Hello World";

//Fatal Error

// function demo() {
//     echo 1+1;
// }
// demu();


//warning error


// echo "Hello PHP";

// include ("File.php");


//Notice Error

// $x = "Hello, World!";
// echo $x;

//Deprecated Error

$lat = 34;
$lon = 118;
$sunrise = date_sunrise(time(), SUNFUNCS_RET_DOUBLE, $lat, $lon);
