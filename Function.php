<?php
$A = array(6, 1.33, 4, 2, 3);


function scaler($array, $factor){
    foreach ($array as $key => $value) {
        $val[]=$value*$factor;
    }
    return $val;
}

$B = scaler($A, 6);
var_dump($B);

echo "<pre>";
print_r($B);
echo "<pre>";

?>