<?php
	function ft_is_sort($tab)
	{
		if (count($tab) == 1)
			return (1);
		$buff = $tab;
		sort($buff);
		for ($i = 0; $i < count($buff); $i++) { 
			if (strcmp($buff[$i], $tab[$i]))
				return (0);
		}
		return (1);
	}
?>