<?php
session_start(); 
require ("db.php");

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title> Tarefa de Delay Discounting </title>

</head>

<body>



<form id="choiceBox" name='dlc-money'>	
	<input type="button" id="btn1" name="btn1" value="Agora">
	<input type="button" id="btn2" name="btn2" value="Em 1 semana">
</form>

<div id="val-imediato">500</div>
<div id="val-atrasado">1000</div>
<script src="main.js" type="text/javascript"></script>
</body>
</html>