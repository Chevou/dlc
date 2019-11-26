<?php
session_start(); 
require ("db.php");

$user_id = $_SESSION['user_id'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisa sobre Hábitos de Jogador</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

</head>
<body style="background-color: #808080; color: white;">
	<script src="./formscript.js" type="text/JavaScript"></script>
	<form id="choiceBox" name='dlc-game'>
	<div style="height: 25vh;"></div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12 mb-5">
				<h3> Você prefere jogar por: </h3>
			</div>
			<div class="col-6 col-sm-3">
				<div><span class="h2" id="val-imediato">30</span>minutos</div>	
				<input type="button" id="btn1" name="btn1" class="btn btn-lg" style="background-color: #FF7F50; color: white;" value="Agora">
			</div>
		    <div class="col-6 col-sm-3">
		    	<div><span class="h2" id="val-atrasado">60</span>minutos</div>
		    	<input type="button" id="btn2" name="btn2" class="btn btn-lg" style="background-color: #FF7F50; color: white;" value="Em 1 hora">
		    </div>
		 </div>
	</div>		
	</form>

	
	
	<script src="main.js" type="text/javascript"></script>
		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>