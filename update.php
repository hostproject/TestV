<?php
	$f = fopen("log.log", "a");
	$out = shell_exec("git pull");
	fwrite($f, "\r\n" . $out);
	fclose($f);
?>