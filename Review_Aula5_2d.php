


<?php

$numeros = array(
	 array(1,2,3),
	 array(4,5,6),
	 array(7,8,9)
);
for($i=0; $i<count($numeros); $i++) {
    for($j=0; $j<count($numeros[$i]); $j++){
	echo $numeros[$i][$j];
	echo " "; // separates the values/col
    }
     echo "<br>"; // sep the lines
   
}

?>