<?php
session_start();
require 'db.php';

/*Informações Pessoais*/
$nascimento = $_POST['nascimento'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$residencia = $_POST['residencia'];
$naturalidade = $_POST['naturalidade'];
$escolaridade = $_POST['escolaridade'];
$is_estudante = $_POST['is_estudante'];
$formacao = $_POST['formacao'];
$horario_estudo = $_POST['horario_estudo'];
$profask = $_POST['profask'];
$profissao = $_POST['profissao'];
$h_trabalho = $_POST['h_trabalho'];
$alcool = $_POST['alcool'];
$tabaco = $_POST['tabaco'];
$odroga = $_POST['odroga'];
$jogo_freq = $_POST['jogo_freq'];
$hora_semana = $_POST['hora_semana'];
$jogoporvida = $_POST['jogoporvida'];
$sessaojogo = $_POST['sessaojogo'];
$comp = $_POST['comp'];

/*Preferência de Jogo*/
$ordergp1 = 1;
$gamep1 = $_POST['gamep1'];
$gamep_time1 = $_POST['gamep-time1'];
$gamep_mode1 = $_POST['gamep-mode1'];

$ordergp2 = 2;
$gamep2 = $_POST['gamep2'];
$gamep_time2 = $_POST['gamep-time2'];
$gamep_mode2 = $_POST['gamep-mode2'];

$ordergp3 = 3;
$gamep3 = $_POST['gamep3'];
$gamep_time3 = $_POST['gamep-time3'];
$gamep_mode3 = $_POST['gamep-mode3'];

$ordergp4 = 4;
$gamep4 = $_POST['gamep4'];
$gamep_time4 = $_POST['gamep-time4'];
$gamep_mode4 = $_POST['gamep-mode4'];

$ordergp5 = 5;
$gamep5 = $_POST['gamep5'];
$gamep_time5 = $_POST['gamep-time5'];
$gamep_mode5 = $_POST['gamep-mode5'];


/*Preferência de Plataforma*/
$orderpp1 = 1;
$platp1 = $_POST['platp1'];

$orderpp2 = 2;
$platp2 = $_POST['platp2'];

$orderpp3 = 3;
$platp3 = $_POST['platp3'];

$orderpp4 = 4;
$platp4 = $_POST['platp4'];


/*Questionário*/
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];



/*db_insertion*/

/*personal_info*/
$query1 = "INSERT INTO personal_info (
	nascimento,
	sexo,
	estado_civil,
	residencia,
	naturalidade,
	escolaridade,
	is_estudante,
	area_formacao,
	horario_estudo,
	trabalha,
	profissao,
	horario_trab,
	alcool,
	tabaco,
	outra_droga,
	freq_jogo,
	hora_semana,
	tempo_vida,
	tempo_sessao,
	is_comp
	)
	VALUES (
	'$nascimento',
	'$sexo',
	'$estado_civil',
	'$residencia',
	'$naturalidade',
	'$escolaridade',
	'$is_estudante',
	'$formacao',
	'$horario_estudo',
	'$profask',
	'$profissao',
	'$h_trabalho',
	'$alcool',
	'$tabaco',
	'$odroga',
	'$jogo_freq',
	'$hora_semana',
	'$jogoporvida',
	'$sessaojogo',
	'$comp'
)";
insert($query1);
$_SESSION['user_id'] = mysqli_insert_id(db_connect());
$user_id = $_SESSION['user_id'];


$query2_1 = "INSERT INTO preferencia_jogo (
	user_id,
	ordem,
	titulo,
	hora_semanag,
	gamep_mode
	)
	VALUES (
	'$user_id',
	'$ordergp1',
	'$gamep1',
	'$gamep_time1',
	'$gamep_mode1'
) ";
insert($query2_1);

$query2_2 = "INSERT INTO preferencia_jogo (
	user_id,
	ordem,
	titulo,
	hora_semanag,
	gamep_mode
	)
	VALUES (
	'$user_id',
	'$ordergp2',
	'$gamep2',
	'$gamep_time2',
	'$gamep_mode2'
) ";
insert($query2_2);

$query2_3 = "INSERT INTO preferencia_jogo (
	user_id,
	ordem,
	titulo,
	hora_semanag,
	gamep_mode
	)
	VALUES (
	'$user_id',
	'$ordergp3',
	'$gamep3',
	'$gamep_time3',
	'$gamep_mode3'
) ";
insert($query2_3);

$query2_4 = "INSERT INTO preferencia_jogo (
	user_id,
	ordem,
	titulo,
	hora_semanag,
	gamep_mode
	)
	VALUES (
	'$user_id',
	'$ordergp4',
	'$gamep4',
	'$gamep_time4',
	'$gamep_mode4'
) ";
insert($query2_4);

$query2_5 = "INSERT INTO preferencia_jogo (
	user_id,
	ordem,
	titulo,
	hora_semanag,
	gamep_mode
	)
	VALUES (
	'$user_id',
	'$ordergp5',
	'$gamep5',
	'$gamep_time5',
	'$gamep_mode5'
)";
insert($query2_5);


$query3_1 = "INSERT INTO preferencia_plataforma (
	user_id,
	ordem,
	plataforma
	)
	VALUES (
	'$user_id',
	'$orderpp1',
	'$platp1'
)";
insert($query3_1);

$query3_2 = "INSERT INTO preferencia_plataforma (
	user_id,
	ordem,
	plataforma
	)
	VALUES (
	'$user_id',
	'$orderpp2',
	'$platp2'
)";
insert($query3_2);

$query3_3 = "INSERT INTO preferencia_plataforma (
	user_id,
	ordem,
	plataforma
	)
	VALUES (
	'$user_id',
	'$orderpp3',
	'$platp3'
)";
insert($query3_3);

$query3_4 = "INSERT INTO preferencia_plataforma (
	user_id,
	ordem,
	plataforma
	)
	VALUES (
	'$user_id',
	'$orderpp4',
	'$platp4'
)";
insert($query3_4);

$query4 = "INSERT INTO questionario (
	user_id, q1, q2, q3, q4, q5, q6, q7, q8, q9
	)
	VALUES (
	'$user_id', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q8'
)";
insert($query4);


header('Location: intro2.php');



?>