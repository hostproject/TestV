<?php
	$f = fopen("log.log");
	fwite($f, shell_exec("git log"));
	fclose($f);
?>