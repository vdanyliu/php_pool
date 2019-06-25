#!/usr/bin/env php
<?php
	while (1) {
		echo("Enter a number: ");
		$line = trim(fgets(STDIN));
		if (feof(STDIN))
		{
			printf("\n");
			exit();
		}
		if (is_numeric($line))
		{
			if ($line % 2)
				echo("The number ".$line." is even");
			else
				echo("The number ".$line." is odd");
		}
		else
			print("'$line' is not a number");
		printf("\n");
	}
?>