#!/usr/bin/php
<?PHP
if (isset($argv[1])){
	$wrong = 0;
	date_default_timezone_set('Europe/Paris');
$months = [
		'janvier',
		'février',
		'mars',
		'avril',
		'mai',
		'juin',
		'juillet',
		'aout',
		'septembre',
		'octobre',
		'novembre',
		'décembre'
	];
$days = [
		'lundi',
		'mardi',
		'mercredi',
		'jeudi',
		'vendredi',
		'samedi',
		'dimamche'
	];
	if (preg_match('/^([A-Z]?[a-z]+) ([0-9]{1,2}) ([A-Z]?[a-z]+) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/', $argv[1], $match)) {
		if ($day = array_search(lcfirst($match[1]), $days) >= 0
			&& ($month = array_search(lcfirst($match[3]), $months)) >= 0
			&& ($year = (int)$match[4]) >= 1970)
		{
			if ($time = mktime((int)$date[5], (int)$date[6], (int)$date[7], $month + 1, (int)$date[2], $year))
			{
					echo $time;
					$wrong = 1;
			}
		}
	}
	if (!$wrong)
		echo "Wrong Format";
}
	echo "\n";
?>