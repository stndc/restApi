<?php

CONST BASE_URL = '';

function base_url(){
	return BASE_URL;
}

function dep($data){
	$format = print_r('<pre>');
	$format .= print_r($data);
	$format .= print_r('</pre>');

	return $format;
}

function headeradmin($data=""){
	$html_header = 'html/header.php';
	require_once $html_header;
}

function footeradmin($data=""){
	$html_footer = 'html/footer.php';
	require_once $html_footer;
}

?>