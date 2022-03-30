<?php

$MAX = 100;
  
function DiagonalSums($mat, $n)
{
    global $MAX;
    $principal = 0;
  
    for ($i = 0; $i < $n; $i++) 
    {
        for ($j = 0; $j < $n; $j++) 
        {
  
         
            if ($i == $j)
                $principal += $mat[$i][$j];
  
       
        }
    }
  
    echo "Principal Diagonal:" , 
               $principal ,"
";

}
  

$a = array (array ( 1, 2, 3, 4 ), 
            array ( 5, 6, 7, 8 ), 
            array ( 1, 2, 3, 4 ), 
            array ( 5, 6, 7, 8 ));
printDiagonalSums($a, 4);
?>