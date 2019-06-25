#!/usr/bin/env php
<?php
	if (count($argv) < 2)
	exit();
	$argv[0] = NULL;
	$str = $argv[1];
	$str = trim(preg_replace("/\s+/", " ", $str));
	$arr = explode(" ", $str);
	for ($i = 1; $i < count($arr); $i++) {
		echo "$arr[$i] ";
	}
	echo "$arr[0]\n";
?>