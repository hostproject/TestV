<?php
$f = fopen(__DIR__ . "/log.log", "a");
$out = shell_exec("git -C /root/TestV/ pull");

print_r($out);
if(stripos($out, "updating") === true){
	print_r("print: true");
	$out = shell_exec("git -C /root/TestV/ pull");
	if(stripos($out, "Updating") === true){
		shell_exec("git -C /root/TestV/ reset --hard");
		$out = shell_exec("git -C /root/TestV/ pull");
	}
}

fwrite($f, "\r\n" . $out);
fclose($f);
?>