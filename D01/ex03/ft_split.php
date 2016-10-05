#!/usr/bin/php
<?php
function ft_split($str)
{
	$my_tab = explode(" ", $str);
	sort($my_tab);
	foreach ($my_tab as $key => $value)
	{
		if ($my_tab[$key] == '')
			unset($my_tab[$key]);
	}
	return ($my_tab);
}
?>
