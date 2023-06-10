<?php 

echo "<h1>The Third Exercise</h1>";

function multipy_two(array $a,array $b){
    $multily = array();
    foreach ($a as $key => $value) {
        $multily[] = $value * $b[$key];
    
    }
    return $multily;
}

$a = [4,3,6,235,64];
$b = [4,2,5,2,3];


var_dump(multipy_two($a,$b));