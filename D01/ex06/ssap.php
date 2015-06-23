#!/usr/bin/php
<?php
$str = implode(' ', $argv);
$tab = explode(' ', $str);
array_shift($tab);
$tab = array_filter($tab);
sort($tab, SORT_REGULAR);
foreach ($tab as $key)
	echo $key."\n";
?>