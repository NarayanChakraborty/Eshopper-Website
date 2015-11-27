<?php


$dbhost = 'localhost';
$dbname = 'eshopper';
$dbuser = 'root';
$dbpass = '';

try {
	$db = new PDO("mysql: host={$dbhost}; dbname={$dbname}",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	echo "Opps!!!!Connection Error!";
	
}



?>