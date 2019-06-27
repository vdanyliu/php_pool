#!/usr/bin/env php
<?php
	if ($argc == 1)
		exit();
	//$str = preg_replace("/\s+/", " ", $argv[1]);
	
	$check = preg_match('/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [0-9][0-9]? ([Jj]aniver|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uú]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][eé]cembre) [0-9]{4} [0-9}{2}:[0-9]{2}:[0-9]{2}/', $argv[1], $res);
	$res = $res[0];
	if ($check == 0)
	{
		echo "Wrong Format\n";
		exit();
	}
	$mounth = array (
		'/[Jj]aniver/',
		'/[Ff][eé]vrier/',
		'/[Mm]ars/',
		'/[Aa]vril/',
		'/[Mm]ai/',
		'/[Jj]uin/',
		'/[Jj]uillet/',
		'/[Aa]o[uú]t/',
		'/[Ss]eptembre/',
		'/[Oo]ctobre/',
		'/[Nn]ovembre/',
		'/[Dd][eé]cembre/',
	);
	$mounth_num = array ("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
	$res = explode(" ", $argv[1]);
	$res[2] = preg_replace($mounth, $mounth_num, $res[2]);
	date_default_timezone_set("Europe/Paris");
	$time_cotile = strtotime("$res[3]-$res[2]-$res[1] $res[4]");
	echo $time_cotile."\n";
?>