#!/usr/bin/php
<?php
	$tab = explode(' ', $argv[1]);
	$tab = array_filter($tab);
	$tmp = array_shift($tab);
	echo implode(' ', $tab).' '.$tmp."\n";
?>