<?php
	$f = fopen("log.log", "a");
	$out = shell_exec("git -C /root/TestV/ pull");
	fwrite($f, "\r\n" . $out);
	fclose($f);
?>