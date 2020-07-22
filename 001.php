<?php
// Multiples of 3 and 5
// 
// If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
// Find the sum of all the multiples of 3 or 5 below 1000.

function multiples($limit){
	$a = [];
	for ($i=1; $i < $limit; $i++) {
		// multiples of 3
		if ($i % 3 == 0) {
			$a[] = $i;
		}
		// multiples of 5
		if ($i % 5 == 0) {
			$a[] = $i;
		}
	}
	$a = array_unique($a);
	$output = NULL;
	foreach ($a as $key) {
		if($output == NULL){
			$output = $key;
		}else{
			$output = $output + $key;
		}
	}
	return $output;
}

echo multiples(1000);
?>