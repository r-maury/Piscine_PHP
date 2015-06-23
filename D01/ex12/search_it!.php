#!/usr/bin/php
<?php
	$tab = array();
	$to_find = $argv[1];
	foreach($argv as $key => $value)
	{
		if ($key > 1)
			array_push($tab, $value);
	}
	foreach ($tab as $key => $value)
	{
		$tmp = explode(':', $value);
		if ($to_find == $tmp[0])
			$final = $tmp[1];
	}
	if (isset($final))
		echo $final . "\n";
?>