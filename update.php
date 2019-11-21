<?php
	$f = fopen(__DIR__ . "/log.log", "a");
	$out = shell_exec("git -C /root/TestV/ pull");
	print_r(" print: ". $out);
	if(strrpos($out, "error: Your local") === true){
		shell_exec("git -C /root/TestV/ reset --hard");
		$out = shell_exec("git -C /root/TestV/ pull");
	}
	
	fwrite($f, "\r\n" . $out);
	fclose($f);
?>