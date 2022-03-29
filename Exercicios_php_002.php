// implemente uma função que somar todos os elementos da diagnoal principal de uma matriz

<?php

  
function dia_prin_sum($mat, $n)
{

    
	$diagonal = 0;

	for ($i = 0; $i < $n; $i++) 
	{
		for ($j = 0; $j < $n; $j++) 
		{
  
			if ($i == $j)
				$diagonal += $mat[$i][$j];
  
		}
	}
	
	echo "Diagonal Principal:" ,
		$diagonal ,"
";

	
}
  
    
  

$a = array (array ( 1, 2, 3 ), 
            array ( 5, 6, 7 ), 
            array ( 1, 2, 3 ));
$n = 3;


dia_prin_sum($a, $n);

  

?>
