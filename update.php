<?php
	$f = fopen(__FILE__ . "log.log", "a");
	$out = shell_exec("git -C /root/TestV/ pull");
	
	if(strrpos($out, "error: Your local") === true){
		shell_exec("git -C /root/TestV/ reset --hard");
		$out = shell_exec("git -C /root/TestV/ pull");
	}
	
	fwrite($f, "\r\n" . $out);
	fclose($f);
?>