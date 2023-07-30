<?php

class db {

	//declaration of host, database name, and database password
	private $host = "localhost"; 
	private $db_name = "id21003519_api_admin";
	private $db_user = "id21003519_admin_api"; 
	private $db_pass = "Em@n0807"; 

	public $conn;

	//initiate connection to database		
	public function get_connection() {
		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->conn->exec("set names utf8");

		} catch (PDOException $e) {
			echo "Database connection failed: " . $e->getMessage();
		}

		return $this->conn;
	}
}

// Create an instance of the db class
$database = new db();

// Attempt to establish the connection
$connection = $database->get_connection();

?>