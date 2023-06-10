<?php 
echo "<h1>The First Exercise</h1>";

function return_odd(array $arr){
    $arr_temp = array();
    foreach ($arr as $value){
    if($value%2 != 0){
        $arr_temp[]= $value; 
    }
}
    return $arr_temp;
}


$arr = [1,2,3,4,5,6,7,8,9];
$arr_temp = return_odd($arr);

var_dump($arr_temp);



