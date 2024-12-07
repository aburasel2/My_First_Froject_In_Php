<?php

// define constant for Temparature converter: 

define("FACTOR",9/5);
define("OFFSET",32);

echo"Enter the temparature value :";
$Temparature = (float)readline();

echo " Convert to (1. Fahrenheit , 2. Celsious :) ";
$choice=(int)readline();

switch ($choice) {
    case 1:
        $Fahrenheit = $Temparature * FACTOR + OFFSET;
        echo"Temparature in Fahrenheit : $Fahrenheit";
        break;
    case 2:
        $Celsious = ($Temparature - OFFSET) / FACTOR;
        echo " TEmparature in Celsious : $Celsious";
        break;
    default:
        echo "Invalid choice for Temparature";
}