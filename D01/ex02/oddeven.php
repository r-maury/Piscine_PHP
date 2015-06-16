#!/usr/bin/php
<?php
while(42)
{
	echo "Entrez un nombre: ";
	if (($get = fgets(STDIN)) == FALSE)
	{
		echo "^D\n";
		exit(1);
	}
	$get = trim($get, "\n");
	if (!is_numeric($get))
		echo "'$get' n'est pas un chiffre\n";
	else if ($get % 2 == 0)
		echo "Le chiffre $get est Pair\n";
	else if ($get % 2 != 0)
		echo "Le chiffre $get est Impair\n";
}
?>