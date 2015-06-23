#!/usr/bin/php
<?php
	function ft_strcmp($s1, $s2)
	{
		$i = 0;
		$s1 = strtolower($s1);
		$s2 = strtolower($s2);
		if ($s1 == $s2)
			return (0);
		while ($s1[$i] != '' && $s2[$i] != '' && $s1[$i] == $s2[$i])
			$i++;
		if ($s1[$i] == '')
			return (-1);
		if ($s2[$i] == '')
			return (1);
		if (ctype_alpha($s1[$i]) && ctype_alpha($s2[$i]))
			{
				if ($s1[$i] > $s2[$i])
					return (1);
				else if ($s1[$i] < $s2[$i])
					return (-1);
			}
			else if (ctype_alpha($s1[$i]) == TRUE && ctype_alpha($s2[$i]) == FALSE)
				return (-1);
			else if (ctype_alpha($s1[$i]) == FALSE && ctype_alpha($s2[$i]) == TRUE)
				return (1);
			else if (ctype_digit($s1[$i]) && ctype_digit($s2[$i]))
			{
				if ($s1[$i] > $s2[$i])
					return (1);
				else if ($s1[$i] < $s2[$i])
					return (-1);
			}
			else if (ctype_digit($s1[$i]))
				return (-1);
			else if (ctype_digit($s1[$i]) == FALSE)
				return (1);
	}

	if ($argv[1] != '')
	{
		foreach ($argv as $key => $value)
		{
			if ($key != 0)
				$str = $str.' '.$value;
		}
		$tab = explode(' ', $str);
		$i = 0;
		foreach($tab as $key)
		{
			if ($key == '')
				unset($tab[$i]);
			$i++;
		}
		usort($tab, ft_strcmp);
		foreach ($tab as $value)
			echo $value."\n";
	}
?>