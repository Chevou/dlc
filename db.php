<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



function db_connect () {	

	static $connection;	

	
	if(!isset($connection)) {
		require 'conn.php';

		$connection = mysqli_connect($credentials['servername'], $credentials['username'], $credentials['password']);
	} 

	return $connection;
};

db_connect();



function db_set () {
	// creat db and tables it not exists;
}




?>