<?php
	$f = fopen("log.log", "a");
	fwrite($f, shell_exec("git log"));
	fclose($f);
?>