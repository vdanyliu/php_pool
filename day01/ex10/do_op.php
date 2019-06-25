#!/usr/bin/php
<?php
	if (count($argv) != 4)
	{
		echo "Incorrect Parameters\n";
		exit();
	}
	$a = trim($argv[1]);
	$b = trim($argv[2]);
	$c = trim($argv[3]);
	if (!is_numeric($a) || !is_numeric($c))
	{
		echo ("Wrong parameter, must be numerics\n");
		exit();
	}
	if ($b == "+" || $b == "-" || $b == "*" || $b == "/" || $b == "%") 
	{
			if (($b == "/" || $b == "%") && $c == 0)
				;
			else if ($b == "+")
				echo $a + $c . "\n";
			else if ($b == "-")
				echo $a - $c . "\n";
			else if ($b == "*")
				echo $a * $c . "\n";
			else if ($b == "/")
				echo $a / $c . "\n";
			else if ($b == "%")
				echo $a % $c . "\n";
	}
	else
		echo "Incorrect Parameters\n";
?>