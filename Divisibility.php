<?php
function divisibleNumbers($dividends, $divisors)
{
    #var_dump($dividends);
    #var_dump($divisors);
	
	#invalid divisors exception handling
	function checkDivisor($num) {
		if (!is_int($num) || $num == 0) {
			throw new Exception('Invalid Divisor');
		}
	}
	
	try {
		#operation
		$final = array();
		foreach ($divisors as $value) {
			#catch invalid divisor exception
			checkDivisor($value);
			$list = array();
			foreach ($dividends as $key) {
				$result = ($key) / ($value);
				array_push($list,$result);
			}
			#get valid position and push to final array
			foreach($list as $x => $x_value) {
				if (is_int($x_value)) {
					array_push($final,$x);
				}
			}
		}
	}
	catch(Exception $e) {
		echo 'Caught Exception: ' .$e->getMessage() . "\n";
	}
	
	#debug
	#print_r($list);
	print_r($final);
	
	return ($final);
}