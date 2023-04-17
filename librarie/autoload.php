<?php

spl_autoload_register(function($class){
	if(file_exists('0.1/'.$class.'.php')){
		require_once '0.1/'.$class.'.php';
	}
});

?>