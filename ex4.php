<?php

function factorial(int $num){
    if($num <= 1)
        return 1;
    else 
        return $num * factorial($num -1);
}


$number = 8;
echo "The Factorial for $number is : " . factorial($number);