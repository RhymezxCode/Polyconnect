<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


class DB{
private static function connect(){
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "polyconnect";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;
}

public static function query($query, $params = array()){
	$statement = self::connect()->prepare($query);
	$statement->execute($params);
if(explode(' ', $query)[0] == 'SELECT'){
	$data = $statement->fetchAll();
	return  $data;
}
}



}
?>
