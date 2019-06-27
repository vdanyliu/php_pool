#!/usr/bin/env php
<?php
	if ($argc == 1)
		exit();
	$str = preg_replace("/\s+/", " ", $argv[1]);
	$str = trim($str);
	echo ("$str\n");
?>