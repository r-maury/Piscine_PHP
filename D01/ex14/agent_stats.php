#!/usr/bin/php
<?php
	$i = 0;
	$array = array();
	$user = array();
	$note = array();
	$noteeur = array();
	$feedback = array();
	$sarray = array();
	$suser = array();
	while($f = fgets(STDIN))
	{
		if ($i != 0)
		{
			$array = explode(';', $f);
			array_push($user, $array[0]);
			array_push($note, $array[1]);
			array_push($noteur, $array[2]);
			array_push($feedback, str_replace("\n", '', $array[3]));
		}
		$i++;
	}
	$j = 0;
	$m = 0;
	if ($argv[1] == "moyenne")
	{
		foreach ($noteur as $key => $value) {
			if ($value != "moulinette")
			{
				if ($note[$key] != '')
					$j++;
				$m += $note[$key];
			}
		}
		$tm = $m / $j;
		echo $tm . "\n";
	}
	elseif ($argv[1] == "moyenne_user")
	{
		foreach ($user as $key => $value) {
			$j = 0;
			$m = 0;
			if (!in_array($value, $suser))
			{
				array_push($suser, $value);
				foreach ($user as $keyx => $valuex) {
					if ($valuex == $value && $noteur[$keyx] != "moulinette")
					{
						if ($note[$keyx] != '')
							$j++;
						$m += $note[$keyx];
					}
					if ($j != 0)
						$tm = $m / $j;
				}
				$snote[$value] = $tm;
			echo $value . "\nm = " . $m . "\n j = " . $j . "\n";
			}
		}
		ksort($snote);

		foreach ($snote as $key => $value) {
			echo $key . ":" . $value . "\n";
		}
	}
	elseif ($argv[1] == "ecart_moulinette")
	{
		foreach ($user as $key => $value) {
			$j = 0;
			$m = 0;
			if (!in_array($value, $suser))
			{
				array_push($suser, $value);
				foreach ($user as $keyx => $valuex) {
					if ($valuex == $value && $noteur[$keyx] != "moulinette")
					{
						if ($note[$keyx] != '')
							$j++;
						$m += $note[$keyx];
					}
					if ($j != 0)
						$tm = $m / $j;
				}
				$snote[$value] = $tm;
			}
		}
		ksort($snote);
			foreach ($snote as $key => $value)
			{
				foreach ($noteur as $keyx => $valuex)
				{
					if ($valuex == "moulinette" && $user[$keyx] == $key)
					{
						$moulinotte = $note[$keyx];
					}
				}
				$diff = $value - $moulinotte;
				echo $key . ":" . $diff . "\n";
			}
	}
?>
