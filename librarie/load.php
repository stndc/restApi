<?php

$class = '0.1/'.$uno.'.php';
if(file_exists($class)){
	require_once $class;
	$uno = new $uno();

	if(method_exists($uno, $dos)){
		$uno->{$dos}($tres);
	} else{
		require_once '0.1/error.php';
	}

} else{
	require_once '0.1/error.php';
}

?>