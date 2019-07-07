<?php
    $n = 4;   
	$dem = 1;  
	for ($i = $n; $i > 0; $i--) {  
	   for ($j = $i; $j < $n + 1; $j++) {  
		 echo $dem .'&nbsp' ;  
		 $dem++;  
	   }
	   echo "<br>";
	}
?>