<?php

class Sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","root");

	}

	private function setParams($statement,$params = array()){
		foreach ($params as $key => $value) {
			$this->setParam($statement,$key,$value);
		}
	}

	private function setParam($statement, $key,$value){
		$statement->bindParam($key,$value);
	}

	public function query($rawquery,$params = array()){
		$stmt = $this->conn->prepare($rawquery);

		$this->setParams($stmt,$params);
		
		$stmt->execute();


		return $stmt;
		
	}

	public function select($rawquery,$params = array()):array
	{
		$stmt = $this->query($rawquery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

		
	}


}


?>