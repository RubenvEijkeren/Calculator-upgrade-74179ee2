<?php 
	echo "Welke operatie wil je uitvoeren? (+, - of %)\n";
	$operator = rtrim(fgets(STDIN));
	echo $operator . "\n";
	
	if ($operator == '+' || $operator == '-' || $operator == '%'){
		echo "Eerste getal?\n";
		$number1 = rtrim(fgets(STDIN));
		if (!(is_numeric($number1))){
			echo $number1 . " is geen getal\n";
			exit;
		}
		echo "Tweede getal?\n";
		$number2 = rtrim(fgets(STDIN));
		if (!(is_numeric($number2))){
			echo $number2 . " is geen getal\n";
			exit;
		}
		$number3 = $number1 + $number2;
		$number4 = $number1 - $number2;
		$number5 = $number1	% $number2;
		if ($operator == '+')
			echo "Uw resultaat is: " . $number3;
		elseif ($operator == '-')
			echo "Uw resultaat is: " . $number4;
		else
			echo "Uw resultaat is: " . $number5;
	}
	else
		echo "Dat is geen toegestaande operator";
?>