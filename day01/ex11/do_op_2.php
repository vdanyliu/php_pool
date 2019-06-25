#!/usr/bin/php
<?php
	if (count($argv) != 2)
	{
		echo "Incorrect Parameters\n";
		exit();
	}
	$str = $argv[1];
		$str = str_replace("+", " + ", $str);
		$str = str_replace("-", " - ", $str);
		$str = str_replace("*", " * ", $str);
		$str = str_replace("/", " / ", $str);
		$str = str_replace("%", " % ", $str);
		$arr = array_filter(explode(" ", $str, 3));
	$a = $arr[0];
	$b = $arr[1];
	$c = $arr[2];
	$cs = $arr[4];
	if ($arr[4])
	{
		echo "Incorrect Parameters\n";
		exit();
	}
	if (!is_numeric($a) || !is_numeric($c))
	{
		if (is_numeric($a) && !$b || is_numeric($b) && !$a)
		{
		exit();
		echo ("Wrong parameter, must be numerics\n");
		}
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