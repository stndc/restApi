<?php

class Errors extends Theme{

	public function __construct(){
		$this->theme = new Theme();
	}

	public function notfound(){
		$this->theme->getTheme($this, 'errors');
	}

}

$notfound = new Errors();
$notfound->notfound();

?>