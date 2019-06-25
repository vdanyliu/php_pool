#!/usr/bin/env php
<?php
	if (count($argv) < 2)
	exit();
	$argv[0] = NULL;
	$str = implode(" ", $argv);
	$arr = explode(" ", $str);
	sort($arr);
	for ($i = 0; $i < count($arr); $i++) {
		if ($arr[$i]) 
		echo "$arr[$i]\n";
	}
?>