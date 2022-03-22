<?php
$array_1 = array(6, 1.33,"Janice", "C", True, 8, 2.67, "Torrecampo", "S", False);

echo "<pre>";
print_r($array_1);
echo "<pre>";
?>

$array = array(6, 1.33,"Janice", "C", True, 8, 2.67, "Torrecampo", "S", False);

$length = count($array);
for ($i = 0, $i < $length; $i++) {
	print $array[i];
}	