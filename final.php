 <?php
// session_start();

// $consent = isset($_POST['consentimento']) ? $_POST['consentimento'] : 0;
// $_SESSION['consent'] = $consent;

// $gamer = isset($_POST['is_gamer']) ? $_POST['is_gamer'] : 0;
// $_SESSION['gamer'] = $gamer;

// if ($consent == 1 && $gamer == 1) {
// 	header('Location: ./questionario.php');
// }

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
<body>
<script src="./formscript.js" type="text/JavaScript"></script>
<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

<div class="container">
	<div class="jumbotron border-bottom" style="background-color: white;">			
		<h4 class="display-4"> Jogos Eletrônicos </h4>
		<h4><small class="text-muted"> Avaliação sobre hábitos de jogadores e o modo como fazem escolhas </small></h4>
	</div>
	
		<div class="col-sm-12 col-lg-8 text-left mt-3">
			<h3> Agradecemos a sua participação na pesquisa. </h3><br>
			<p> Para qualquer informação adicional, sinta-se livre nos para contatar por qualquer um dos meios especificados abaixo. </p>
			<div class="mt-5">
				<adress>
					<h4> Informações de Contato </h4>
					<p><b>Pesquisador</b>: Alexandre Rimar Cintra<br> <a href="mailto:alrcintra@gmail.com">alrcintra@gmail.com</a> </p>
					<p><b>Pesquisador Responsável</b>: Fábio Leyser Gonçalves<br> <a href="fabio.leyser@unesp.br">fabio.leyser@unesp.br</a></p>
					<p><b>Instituição:</b> Faculdade de Ciências da Universidade Estadual Paulista "Júlio de Mesquita Filho" (UNESP)</p>
					<p><b>Endereço</b>: Av. Eng. Luís Edmundo Carrijo Coube, 2085 - Núcleo Residencial Presidente Geisel, Bauru - SP. CEP: 17033-260</p>
				</adress>
			</div>
		</div>		
	</div>	

	<div class="row border-top justify-content-center mt-3" id="footer">		
		<div class="col-sm-4 mt-3">
			<img src="img/unesplogo.jpg" class="img-fluid" alt="Logo da Unesp: Universidade Estadual Paulista Júlio de Mesquita Filho">
		</div>
		<div class="col-sm-4 mt-3">
			<img src="img/fapesplogo.png" class="img-fluid" alt="Logo da FAPESP: Fundação de Amparo à Pesquisa de São Paulo">
		</div>
	</div>
</div>
</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>