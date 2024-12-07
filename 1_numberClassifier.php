<?php


echo"Enter a number :";
// Variable value set from user ;
$number=(int)readline();
//output from user;
// echo $number;
// condition check is number positive or negative or zero;
if($number>0){
    echo "The Number is Positive";
}
else if($number<0){ 
    echo "The Number is Negative";
}
else{
    echo "The Number is Zero";
}