#!/usr/bin/php
<?PHP
	if($argv[1])
	{
		echo preg_replace("/\s+/", ' ', trim($argv[1]))."\n";
	}
?>