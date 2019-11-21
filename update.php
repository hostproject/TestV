<?php
	$f = fopen("log.log");
	fwrite($f, shell_exec("git log"));
	fclose($f);
?>