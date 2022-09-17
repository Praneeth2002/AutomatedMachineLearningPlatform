<?php
	//$numbers = '1';
	// $pythonScript = "input.py";
 //   	$cmd = array("python", $pythonScript, escapeshellarg(json_encode($numbers)));
 //   	$cmdText = implode(' ', $cmd);
 //   	echo "Running command: " . $cmdText . "\n";
 //   	$result = shell_exec($cmdText);
 //  	var_dump(json_decode($result, true));
  	echo shell_exec("python C:/xampp/htdocs/mini/input.py 'param1' 'param2'");
  ?>