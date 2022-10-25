<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "11642000", "db_clinica");
			return $conexion;
			
		}
	}
?>

<?php

$server = 'localhost';
$username = 'root';
$password = '11642000';
$database = 'db_clinica';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>