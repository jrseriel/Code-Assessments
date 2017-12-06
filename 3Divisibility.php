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
		foreach ($divisors as $value) {
			#catch invalid divisor exception
			checkDivisor($value);
			foreach ($dividends as $key) {
				unset($dividends[@$index++]);
				$result = ($key) % ($value);
				if ($result == 0) {
					array_push($dividends,$key);
				}
			}
		}
	}
	catch(Exception $e) {
		echo 'Caught Exception: ' .$e->getMessage() . "\n";
	}
	$list = $dividends;
	$list = array_unique($list);
	sort($list);
	
	#debug
	print_r($list);
	
	return ($list);
}