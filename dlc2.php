<?php
session_start(); 
require ("db.php");

$user_id = $_SESSION['user_id'];



?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title> Tarefa de Delay Discounting </title>

</head>

<body>



<form id="choiceBox" name='dlc-game'>	
	<input type="button" id="btn1" name="btn1" value="Agora">
	<input type="button" id="btn2" name="btn2" value="Em 1 hora">
</form>

<div id="val-imediato">30</div>
<div id="val-atrasado">60</div>
<script src="main.js" type="text/javascript"></script>
</body>
</html>