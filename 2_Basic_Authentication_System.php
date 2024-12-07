<?php

define("USERNAME","Rasel");
define("PASSWORD","1234");


echo"Enter the username :";
$UserName=readline();


echo"Enter the password :";
$Password=readline();

if($UserName===USERNAME && $Password=== PASSWORD){
    echo "Login successful!";
}
else{
    // echo "User or Password Invalid";
    echo "User name or Password is Invalid";
}
