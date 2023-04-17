<?php

class Home extends Theme{

	private $conexion;

	public function __construct(){
		
		// DB Connect
		$conn = new Dbh();
        $this->conexion = $conn->connect();
        $this->theme = new Theme();
	}

	public function home($tres){
		$data["page_id"] = 1;
		$data["page_title"] = "CodeSkate";
		$this->theme->getTheme($this, "home", $data);
	}

}

?>