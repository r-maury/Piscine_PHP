#!/usr/bin/php
<?PHP
function upcase_title($data)
{	
	return($data[1].strtoupper($data[2]));
}

function upcase_text($data)
{
	return (strtoupper($data[0]));
}

function upcase_link($data)
{
	$upcased_data = preg_replace_callback('/(title=")([^"]+)/i', 'upcase_title', $data[0]);
	$upcased_data = preg_replace_callback('/>(.*)</iUs', 'upcase_text', $upcased_data);
	return($upcased_data);
}

$file = fopen($argv[1], "r");
if($file)
{
	while($data = fgets($file))
	{
		$str.= $data;
	}
	$upcased_text = preg_replace_callback('/<a.*>(.*)<\/a>/iUs', 'upcase_link', $str);
	echo $upcased_text;
	fclose($file);
}
?>