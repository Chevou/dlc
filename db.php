<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



function db_connect () {	

	static $connection;	

	
	if(!isset($connection)) {
		require 'conn.php';

		$connection = mysqli_connect($credentials['servername'], $credentials['username'], $credentials['password'], $credentials['dbname']);
		 mysqli_set_charset ($connection, $credentials['charset'] );
	} 

	return $connection;
};

function db_set () {
	$con = db_connect();

	$sql = "CREATE DATABASE IF NOT EXISTS dlcr";
	mysqli_query(db_connect(), $sql);

	$tb_personal_info = "CREATE TABLE IF NOT EXISTS personal_info (
		user_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
		user_email VARCHAR(100),
		submit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
		nascimento DATE NOT NULL,
		sexo CHAR(1) NOT NULL,
		estado_civil CHAR(1) NOT NULL,
		residencia CHAR(2) NOT NULL,
		naturalidade CHAR(2) NOT NULL,
		escolaridade CHAR(3) NOT NULL,
		is_estudante TINYINT(1) NOT NULL,
		area_formacao CHAR(1),
		horario_estudo CHAR(1),
		trabalha TINYINT(1) NOT NULL,
		profissao VARCHAR(100),
		horario_trab CHAR(1),
		alcool TINYINT(1) NOT NULL,
		tabaco TINYINT(1) NOT NULL,
		outra_droga TINYINT(1) NOT NULL,
		freq_jogo TINYINT(1) NOT NULL,
		hora_semana INT(3) NOT NULL,
		tempo_vida TINYINT(2) NOT NULL,
		tempo_sessao TINYINT(2) NOT NULL,
		is_comp TINYINT(1) NOT NULL
		)";

	$tb_preferencia_jogo = "CREATE TABLE IF NOT EXISTS preferencia_jogo (
		prefj_id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT NOT NULL,
		ordem TINYINT(1) NOT NULL,
		titulo VARCHAR(50) NOT NULL,
		hora_semanag INT(3) NOT NULL,
		gamep_mode CHAR(1) NOT NULL,
		FOREIGN KEY(user_id) REFERENCES user(user_id)	
		)";

	$tb_preferencia_plat = "CREATE TABLE IF NOT EXISTS preferencia_plataforma (
		prefp_id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT NOT NULL,
		ordem TINYINT(1) NOT NULL,
		plataforma CHAR(2) NOT NUll,
		FOREIGN KEY(user_id) REFERENCES user(user_id)
		)";

	$tb_questionario = "CREATE TABLE IF NOT EXISTS questionario (
		q_id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT NOT NULL,
		q1 TINYINT(1) NOT NULL,
		q2 TINYINT(1) NOT NULL,
		q3 TINYINT(1) NOT NULL,
		q4 TINYINT(1) NOT NULL,
		q5 TINYINT(1) NOT NULL,
		q6 TINYINT(1) NOT NULL,
		q7 TINYINT(1) NOT NULL,
		q8 TINYINT(1) NOT NULL,
		q9 TINYINT(1) NOT NULL,
		FOREIGN KEY(user_id) REFERENCES user(user_id)
		)";

	$tb_tempo_tarefa = "CREATE TABLE IF NOT EXISTS tempo_tarefa (
		tempo_id INT AUTO_INCREMENT PRIMARY KEY,
		tempo VARCHAR(50) NOT NULL UNIQUE,
		tarefa VARCHAR(50) NOT NULL )";

	$tb_results = "CREATE TABLE IF NOT EXISTS results (
		result_id INT AUTO_INCREMENT PRIMARY KEY,
		user_id INT,
		tempo_id INT,
		r1 INT DEFAULT 0 NOT NULL,
		r2 INT DEFAULT 0 NOT NULL,
		r3 INT DEFAULT 0 NOT NULL,
		r4 INT DEFAULT 0 NOT NULL,
		r5 INT DEFAULT 0 NOT NULL,
		r6 INT DEFAULT 0 NOT NULL,
		FOREIGN KEY(user_id) REFERENCES user(user_id),
		FOREIGN KEY(tempo_id) REFERENCES tempo_tarefa(tempo_id)
		)";


	mysqli_query($con, $sql);
	mysqli_query($con, $tb_personal_info);
	mysqli_query($con, $tb_preferencia_jogo);
	mysqli_query($con, $tb_preferencia_plat);
	mysqli_query($con, $tb_preferencia_jogo);
	mysqli_query($con, $tb_questionario);
	mysqli_query($con, $tb_tempo_tarefa);
	mysqli_query($con, $tb_results);
};

function insert ($query) {
	// insert data into the db 
	// prepared statments
	$con = db_connect();

	$result = mysqli_query($con, $query);
	return $result;
};

db_set();

$insert_tempo_tarefas = "
INSERT INTO tempo_tarefa (`tempo`, `tarefa`) 
	VALUES 
	('1 semana', 'Monetario'),
	('2 semanas', 'Monetario'),
	('1 mes', 'Monetario'),
	('6 meses', 'Monetario'),
	('1 ano', 'Monetario'),
	('3 anos', 'Monetario'),
	('10 anos', 'Monetario'),
	('1 hora', 'Game'),
	('2 horas', 'Game'),
	('6 horas', 'Game'),
	('1 dia', 'Game'),
	('2 dias', 'Game'),
	('4 dias', 'Game'),
	('7 dias', 'Game')";

//insert ($insert_tempo_tarefas);
//insert ("ALTER TABLE tempo_tarefa AUTO_INCREMENT = 1")

?>