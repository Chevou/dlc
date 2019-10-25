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





function db_set () {
	// creat db and tables it not exists

	$sql = "CREATE DATABASE IF NOT EXISTS dlcr";
	mysqli_query(db_connect(), $sql);

	$tb_user = "CREATE TABLE IF NOT EXISTS user (
		user_id INT AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL, /*PROVISÓRIO */
		sub_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ) "; 

	$tb_tempo_tarefa = "CREATE TABLE IF NOT EXISTS tempo_tarefa (
		tempo_id INT AUTO_INCREMENT PRIMARY KEY,
		tempo VARCHAR(50) NOT NULL,
		tarefa VARCHAR(50) NOT NULL )";

	$tb_results = "CREATE TABLE IF NOT EXISTS results (
		result_id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT FOREIGN KEY REFERENCES user(user_id) ON UPDATE CASCADE ON DELETE CASCADE,
		tempo_id INT FOREIGN KEY REFERENCES tempo_tarefa(tempo_id) ON UPDATE CASCADE ON DELETE CASCADE,
		r1 INT DEFAULT 0 NOT NULL,
		r2 INT DEFAULT 0 NOT NULL,
		r3 INT DEFAULT 0 NOT NULL,
		r4 INT DEFAULT 0 NOT NULL,
		r5 INT DEFAULT 0 NOT NULL,
		r6 INT DEFAULT 0 NOT NULL ) ";

	
}


function insert () {
	// insert data into the db 
	// prepared statments	
}

function update () {
	// update result rows
}

db_set();



?>