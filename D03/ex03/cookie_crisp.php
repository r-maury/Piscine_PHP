<?php
		if ($_GET['action'] == 'set')
			setcookie($_GET['name'], $_GET['value'], time() + 365*24*3600);
		if ($_GET['action'] == 'get')
			echo $_COOKIE[$_GET['name']]."\n";
		if ($_GET['action'] == 'del' && isset($_COOKIE[$_GET['name']])
			setcookie($_GET['name'], '', 0);
?>