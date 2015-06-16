#!/usr/bin/php
<?php
	$tab = explode(' ', $argv[1]);
	$tab = array_filter($tab);
	echo implode(' ', $tab)."\n";
?>