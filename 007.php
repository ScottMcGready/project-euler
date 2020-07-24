<?php

function isPrime($number){
	if($number == 1){
		return false;
	}
	for ($i=2; $i < $number; $i++) { 
		if($number % $i == 0){
			return false;
		}
	}
	return true;
}

function primeID($max){
	$o = 0;
	for ($i=0; $o <= $max; $i++) {		
		if(isPrime($i)){
			$output = $i;
			$o++;
		}
	}
	return $output;
}

echo primeID(10001);

?>