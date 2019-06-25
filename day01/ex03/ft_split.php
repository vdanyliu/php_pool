<?php
	function ft_split($str)
	{
		$a = explode(" ", $str);
		$arr = array_values(array_filter($a));
		sort($arr);
		return ($arr);
	}
?>