<?php
session_start(); 
require ("db.php");

$nome = $_POST['nome'];

$query = "INSERT INTO user (name)
	VALUES ('$nome')";
insert($query);

$_SESSION['user_id'] = mysqli_insert_id(db_connect());
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title> Tarefa de Delay Discounting </title>

</head>

<body>




<p> Mensagem explicando DD </p>

<input type="button" onclick="location.href='../dlc/dlc1.php';" value="Prosseguir" />

</body>
</html>


