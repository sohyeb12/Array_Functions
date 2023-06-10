<?php
echo "<h1>The second Exercise</h1>";

function Long_string(array $arr_strings){
    $long_String = '';

    foreach ($arr_strings as $key => $value) {
        if(strlen($value) > strlen($long_String))
            $long_String = $value;
    }

    return $long_String;
}

$arr_strings = [
    'a' => "rewreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee",
    'b' => "Jarwan",
    'c' => 'Loui Rashed Matter'
];

echo "The Longest Strings : ". Long_string($arr_strings);