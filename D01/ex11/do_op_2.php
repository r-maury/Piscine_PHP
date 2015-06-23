#!/usr/bin/php
<?php
	$index = -1;
	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{
		for ($i = 0; $argv[1][$i] != ''; $i++)
		{
			if ($argv[1][$i] == '+' || $argv[1][$i] == '-'
				|| $argv[1][$i] == '*' || $argv[1][$i] == '/'
				|| $argv[1][$i] == '%')
			{
				$index = $i;
				$operator = $argv[1][$i];
			}
		}
		if ($index == -1)
			echo "Syntax Error\n";
		else
		{
			$array = explode($argv[1][$index], $argv[1]);
			foreach ($array as $key => $value)
			{
				$array[$key] = trim($value);
				if (is_numeric($array[$key]) == FALSE)
					$index = -1;
			}
			if ($index == -1)
				echo "Syntax Error\n";
			else
			{
				if ($operator == '+')
					echo $array[0] + $array[1];
				else if ($operator == '-')
					echo $array[0] - $array[1];
				else if ($operator == '*')
					echo $array[0] * $array[1];
				else if ($operator == '/')
					echo $array[0] / $array[1];
				else if ($operator == '%')
					echo $array[0] % $array[1];
				echo "\n";
			}
		}
	}
?>
