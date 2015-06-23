<?PHP
	function ft_is_sort($tab)
	{
		foreach ($tab as $val)
		{
			if ($tmp > $val)
				return (FALSE);
			$tmp = $val;
		}
		return (TRUE);
	}
?>