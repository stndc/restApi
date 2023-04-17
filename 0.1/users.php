<?php

class Users extends Theme{

	private $conexion;

	public function __construct(){
		
		// DB Connect
		$conn = new Dbh();
        $this->conexion = $conn->connect();
        $this->theme = new Theme();
	}

	public function users($tres){
		$data["page_id"] = 2;
		$data["page_title"] = "Users";
		$this->theme->getTheme($this, "users", $data);
	}

	public function allusers(){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			$sql  = "SELECT * FROM usuario";
			$stmt = $this->conexion->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			header("Content-Type: application/json");
			echo json_encode($result);

			return $result;

		} else{
			echo 'METHOD ERROR';
		}
	}

	public function user($id){
		if($_SERVER['REQUEST_METHOD'] == 'GET'){

			$sql  = "SELECT * FROM usuario WHERE id = :id";
			$stmt = $this->conexion->prepare($sql);
			$stmt->execute(array(":id" => $id));
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

			header("Content-Type: application/json");
			$data = json_decode($id);

			if($data){
				echo json_encode($result);
			}

			return $result;

		} else{
			echo 'METHOD ERROR';
		}
	}

}

?>