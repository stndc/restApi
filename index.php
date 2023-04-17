<?php

require_once 'librarie/db.php';
require_once 'librarie/functions.php';


$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
$uno = $arrUrl[0];
$dos = $arrUrl[0];
$tres = "";

if(!empty($arrUrl[1])){
	if($arrUrl[1] != ""){
		$dos = $arrUrl[1];
	}
}

if(!empty($arrUrl[2])){
	if($arrUrl[2] != ""){
		for($i=2; $i < count($arrUrl); $i++){
			$tres .= $arrUrl[$i].',';
		}
		$tres = trim($tres, ',');
	}
}

require_once 'librarie/autoload.php';
require_once 'librarie/load.php';

?>