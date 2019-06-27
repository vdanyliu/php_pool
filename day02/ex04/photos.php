#!/usr/bin/php
<?php
$url = $argv[1];
$urls = array();

function download_file($url, $file_td, $put_file)
{
	$shell = shell_exec("mkdir -p ".$put_file);
	$name_file = array_pop(preg_split('/\//', $file_td));

	$file = fopen($put_file.'/'.$name_file, 'w');

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url.$file_td);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FILE, $file);
	curl_exec($ch);
	curl_close($ch);

	fclose($file);
}

function get_html($url)
{
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	$result = curl_exec($ch);
	return ($result);
}
if ($argc < 1)
	exit();

$html = get_html($url);

$html = preg_match_all('/<img[^>]+src="([^\s>]+)".*/mU', $html, $mat);
foreach ($mat[1] as $key => $value) {
	array_push($urls, $value);
}

if (preg_match("/^(http(s?):\/\/)([^\/]+)/", $url, $url_s) == 0)
	$url_s = $url;
else
	$url_s = $url_s[3];
foreach ($urls as $key => $value) {
	download_file($url, $value, $url_s);
}
?>
