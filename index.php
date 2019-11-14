 <?php
session_start();

$consent = isset($_POST['consentimento']) ? $_POST['consentimento'] : 0;
$_SESSION['consent'] = $consent;

$gamer = $consent = isset($_POST['is_gamer']) ? $_POST['is_gamer'] : 0;
$_SESSION['gamer'] = $gamer;

if ($consent == 1 && $gamer == 1) {
	header('Location: ./questionario.php');
}

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


	<div class="row justify-content-center text-justify">		
		<div class="col-sm-10 col-lg-8">
			<h1 class="text-left"> Bem vindo(a)! </h1>			

			<p> Obrigado por aceitar nosso convite para responder ao questionário. </p>

			
			<!-- Pergunta se é gamer  -->
			<div class="form-group text-center">
				<span class="text-center"><h5>Você joga vigeo games? <br><small>(Qualquer plataforma é válida: computador, console, smartphones etc.)</small></h5></span>
				<div class="form-check form-check-inline">
					<input class="form-check-input" id="is_gamer1" name="is_gamer" type="radio" value="1" onclick="isgamer();" required>
					<label class="form-check-label" for="is_gamer1">Sim, eu jogo.</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" id="is_gamer2" name="is_gamer" type="radio" value="0" onclick="isgamer();" required>
					<label class="form-check-label" for="is_gamer2">Não, não eu jogo.</label>
				</div>
			</div>
		</div>
	</div>

	<div id="not-gamer" class="not-gamer row justify-content-center text-justify border-top d-none">		
		<div class="col-sm-10 col-lg-8">
			<p> Novamente agradecemos o interesse em participar, no entanto, esta pesquisa é direcionada para pessoas que jogam video game. </p>
		</div>
	</div>



	<div id="gamer1" class="row justify-content-center text-justify border-top d-none">		
		<div class="col-sm-10 col-lg-8">
			
			<p> Essa pesquisa objetiva avaliar os hábitos de jogadores de videogame e como eles fazem escolhas. </p>
			<p> O tempo total de resposta varia de 15 a 20 minutos.  </p>
			<p> O procedimento tem duas etapas: </p>
			<p> - A primeira etapa consiste em um <b>questionário</b> com perguntas básicas sobre seus hábitos como jogador e sobre algumas informações pessoais (lembramos que sua participação será mantida em sigilo) </p>
			<p> - Enquanto a segunda, consiste em uma <b>tarefa de escolhas</b> em diferentes contextos. </p>
			<p> Pedimos para que leia o <b>termo de consentimento</b> abaixo e sinalize sua concordância com os termos expostos antes de prosseguir. </p>



			<h2 class="mt-5 mb-3 text-left"> Termo de Consentimento Livre e Esclarecido </h2>
			<p>Você está sendo convidado para participar da presente pesquisa, que tem como objetivo avaliar hábitos de jogo e o modo com as pessoas fazem escolhas. Tendo em vista o crescente interesse pela compreensão da interação das pessoas com essa nova mídia, no âmbito da saúde pública. A pesquisa está sendo desenvolvida por Alexandre Rimar Cintra, sob orientação do Prof. Dr. Fábio Leyser Gonçalves, na Faculdade de Ciências da Universidade Estadual Paulista “Júlio de Mesquita Filho” (UNESP) em Bauru - SP.</p>
			<p>Sua participação nessa pesquisa consistirá no preenchimento de questões online sobre seus hábitos de jogo e na execução de uma tarefa online com uma série de escolhas sobre situações hipotéticas envolvendo dinheiro e envolvendo videogames. Ressalta-se que a participação é voluntária e que, portanto, você pode se recusar a participar ou desistir do processo a qualquer momento durante o curso da pesquisa, inclusive retirar o consentimento para a utilização dos dados já coletados, sem qualquer tipo de prejuízo. Como essa é uma pesquisa de levantamento, a possibilidade de qualquer dano decorrente da sua participação é mínima. </p>
			<p>Todas as informações obtidas através dessa pesquisa serão confidenciais, assegurando-se o sigilo sobre sua participação. Por ocasião da publicação dos resultados, estes serão divulgados sem identificação dos participantes, de forma a garantir o anonimato. Além disso, é garantido ao participante o acesso a esses resultados. Ressalta-se que esse documento é de acesso livre e pode ser requisitado aos pesquisadores, que se colocam à disposição para qualquer esclarecimento que se considere necessário.</p>
			<p>O presente Termo está de acordo com as exigências contidas nos itens IV. 3 da Resolução nº 466 de 12 de dezembro de 2012 do Conselho Nacional de Saúde e foi aprovada pelo Comitê de Ética em Pesquisa (CEP) da Faculdade de Ciências da UNESP. O CEP é uma instituição, regulamentada pela Comissão Nacional de Ética em Pesquisa (CONEP), que visa a defesa dos interesses dos participantes da pesquisa, garantindo sua integridade e dignidade dentro dos padrões éticos. 
			Ao aceitar o que foi especificado acima, você declara que foi informado dos objetivos do estudo proposto, de como se dará sua participação, dos procedimentos adotados e das garantias que lhe cabem. E declara seu consentimento em participar da pesquisa, como também concorda com a utilização dos dados obtidos para fins científicos (divulgação em eventos e publicações). </p>
		</div>
		<div class="col-sm-10 col-lg-8 text-left mt-3">
			<adress>
				<p><b>Pesquisador</b>: Alexandre Rimar Cintra<br> <a href="mailto:alrcintra@gmail.com">alrcintra@gmail.com</a> </p>
				<p><b>Pesquisador Responsável</b>: Fábio Leyser Gonçalves<br> <a href="fabio.leyser@unesp.br">fabio.leyser@unesp.br</a></p>
				<p><b>Instituição:</b> Faculdade de Ciências da Universidade Estadual Paulista "Júlio de Mesquita Filho" (UNESP)</p>
				<p><b>Endereço</b>: Av. Eng. Luís Edmundo Carrijo Coube, 2085 - Núcleo Residencial Presidente Geisel, Bauru - SP. CEP: 17033-260</p>
			</adress>
		</div>		
	</div>	
	<div id="gamer2" class="gamer row justify-content-center text-justify d-none">
		<div class="form-group col-sm-10 col-lg-8">
			<h5 style="margin-top: 20px;">Você concorda com os termos expostos acima? </h5>
			<div class="form-check">
				<input class="form-check-input" id="consentimento" name="consentimento" type="checkbox" value="1" id="consentimento" onclick="consentment();" required>
				<label class="form-check-label" for="consentimento">Eu concordo.</label>
			</div>				
		</div>
	</div>
	<div id="gamer3" class="gamer row d-none">
		<div class="offset-sm-9 offset-8"></div>
		<div class="form-group">
			<button type="submit" id="consent-button" class="btn btn-success" aria-disabled="true" disabled>Prosseguir</button>
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