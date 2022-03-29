<?php

  
function sum_2matrizes($matz_1, $matz_2)
{

	for ($i = 0; $i < count($matz_1); $i++) 
	{
		for ($j = 0; $j < count($matz_2); $j++) 
		{
  
			echo $matz_1[$i][$j] +$matz_2[$i][$j].
" ";
  
		}
		echo "<br>";
	}
}
	
  

?>
