<?php

//Simple Electricity Bill Calculator

echo"Enter units to consumed :";
$Units=(int)readline();
// First 1 to 100 units= $5, 100 to 200 units =$10 , 200 Units above=&15.

if( $Units <=100){
    $bill= $Units * 5;
}
else if( $Units <= 200){
    $bill= 100 * 5 + ( $Units - 100)*10;
}
else{
    $bill= 100 * 5 + 100 * 10 + ( $Units - 200) * 15;
}

echo "Total Bill : $$bill";