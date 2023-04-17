<?php

class Theme{

	function getTheme($uno, $theme, $data=""){

		$uno = get_class($uno);
		if($uno == "Home"){
			$theme = "theme/".$theme.".php";
		} else{
			$theme = "theme/".$uno."/".$theme.".php";
		}

		require_once $theme;
	}

}

?>