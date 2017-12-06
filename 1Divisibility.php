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
		$list = array();
		foreach ($divisors as $value) {
			#catch invalid divisor exception
			checkDivisor($value);
			foreach ($dividends as $key) {
				$result = ($key) % ($value);
				if ($result == 0) {
					array_push($list,$key);
				}
			}
		}
	}
	catch(Exception $e) {
		echo 'Caught Exception: ' .$e->getMessage() . "\n";
	}
	
	#debug
	print_r($list);
	
	return ($list);
}