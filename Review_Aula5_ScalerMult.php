// return new matrix

<?php



function matriz_multi($matriz, $escalar) {
	for($i=0; $i<count($matriz); $i++) {
		for($j=0; $j<count($matriz[$i]); $j++) {
			echo "(" . $i . " , " . $j . ")";
			$matriz[$i][$j] = $matriz[$i][$j] * $escalar;
		}
		echo "<br>";
	}
	return $matriz;
}

$m = array(
	array(1,2,3),
	array(4,5,6),
	array(7,8,9));

$res = matriz_multi($m, 5);
echo "<pre>";

for($i=0; $i<count($res); $i++) {
    for($j=0; $j<count($res[$i]); $j++){
	echo $res[$i][$j];
	echo " "; // separates the values/col
    }
     echo "<br>"; // sep the lines
   
}


?>	     

