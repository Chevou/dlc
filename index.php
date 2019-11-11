 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Questionário de Hábitos do Jogador</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
 <body>

<div class = "jumbotron"> teste </div>
<div class = "container">
	<form id="subject-info" action="./intro2.php" method="post">
	<fieldset>
		<legend> Informações Pessoais </legend>

		<div class="form-row">
			<div class="form-group col-sm-3">
	    	<label for="nascimento col-form-label">Data de Nascimento</label>
	    	<input type="date" class="form-control" name="nascimento" id="nascimento">
	  		</div>

			<div class="form-group col-sm-4">
				<label for="sexo">Sexo</label>
    			<select class="form-control" name="sexo" id="sexo">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
      				<option value="m">Masculino</option>
      				<option value="f">Feminino</option>
    			</select>
			</div>

				<div class="form-group col-sm-5">
				<label for="estado-civil">Estado civil</label>
    			<select class="form-control" name="estado-civil" id="estado-civil">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
				    <option value="Solteiro">Solteiro(a)</option>
				    <option value="Casado">Casado(a)</option>
				    <option value="Namorando">Namorando</option>
				    <option value="Divorciado">Divorciado(a)</option>
				    <option value="Viúvo">Viúvo(a)</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-4">
				<label for="local">Residência atual</label>
    			<select class="form-control" name="local" id="local">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
      				<option value="AC">Acre</option>
				    <option value="AL">Alagoas</option>
				    <option value="AP">Amapá</option>
				    <option value="AM">Amazonas</option>
				    <option value="BA">Bahia</option>
				    <option value="CE">Ceará</option>
				    <option value="DF">Distrito Federal</option>
				    <option value="ES">Espírito Santo</option>
				    <option value="GO">Goiás</option>
				    <option value="MA">Maranhão</option>
				    <option value="MT">Mato Grosso</option>
				    <option value="MS">Mato Grosso do Sul</option>
				    <option value="MG">Minas Gerais</option>
				    <option value="PA">Pará</option>
				    <option value="PB">Paraíba</option>
				    <option value="PR">Paraná</option>
				    <option value="PE">Pernambuco</option>
				    <option value="PI">Piauí</option>
				    <option value="RJ">Rio de Janeiro</option>
				    <option value="RN">Rio Grande do Norte</option>
				    <option value="RS">Rio Grande do Sul</option>
				    <option value="RO">Rondônia</option>
				    <option value="RR">Roraima</option>
				    <option value="SC">Santa Catarina</option>
				    <option value="SP">São Paulo</option>
				    <option value="SE">Sergipe</option>
				    <option value="TO">Tocantins</option>
				    <option value="EX">Estrangeiro</option>
    			</select>
			</div>

			<div class="form-group col-sm-4">
				<label for="naturalidade">Naturalidade</label>
    			<select class="form-control" name="naturalidade" id="naturalidade">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
      				<option value="AC">Acre</option>
				    <option value="AL">Alagoas</option>
				    <option value="AP">Amapá</option>
				    <option value="AM">Amazonas</option>
				    <option value="BA">Bahia</option>
				    <option value="CE">Ceará</option>
				    <option value="DF">Distrito Federal</option>
				    <option value="ES">Espírito Santo</option>
				    <option value="GO">Goiás</option>
				    <option value="MA">Maranhão</option>
				    <option value="MT">Mato Grosso</option>
				    <option value="MS">Mato Grosso do Sul</option>
				    <option value="MG">Minas Gerais</option>
				    <option value="PA">Pará</option>
				    <option value="PB">Paraíba</option>
				    <option value="PR">Paraná</option>
				    <option value="PE">Pernambuco</option>
				    <option value="PI">Piauí</option>
				    <option value="RJ">Rio de Janeiro</option>
				    <option value="RN">Rio Grande do Norte</option>
				    <option value="RS">Rio Grande do Sul</option>
				    <option value="RO">Rondônia</option>
				    <option value="RR">Roraima</option>
				    <option value="SC">Santa Catarina</option>
				    <option value="SP">São Paulo</option>
				    <option value="SE">Sergipe</option>
				    <option value="TO">Tocantins</option>
				    <option value="EX">Estrangeiro</option>
    			</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-3">
				<label for="escolaridade">Escolaridade</label>
    			<select class="form-control" name="escolaridade" id="escolaridade">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
				    <option value="Ensino Fundamental">Ensino Fundamental Completo</option>
				    <option value="Ensino Medio">Ensino Medio Completo</option>
				    <option value="Ensino Superior">Ensino Superior Completo</option>
				     <option value="Pos Graduacao">Pós-Graduação Completa</option>
				    <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
				    <option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
				    <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
				     <option value="Pos Graduacao Incompleta">Pós-Graduação Incompleta</option>
				</select>
			</div>

			<div class = "col-sm-3"> 
				<div style="margin-bottom:10px;">Você estuda atualmente?</div>
				<div class="checkbox-inline">
					<input class="form-check-input" name="estudo" type="radio" value="s" id="estudo1">
					<label class="form-check-label" for="estudo1">Sim</label>
				</div>				
				<div class="checkbox-inline">
					<input class="form-check-input" name="estudo" type="radio" value="n" id="estudo2">
					<label class="form-check-label" for="estudo2">Não</label>
				</div>		
			</div>
				

			<div class="form-group col-sm-4">
				<label for="formacao">Área de Formação</label>
    			<select class="form-control" name="formacao" id="formacao">
    				<option value="Selecione" selected disabled hidden>Qual área você cursa/formou-se?</option>
				    <option value="Humanas">Ciências Humanas</option>
				    <option value="Exatas">Ciências Humanas</option>
				    <option value="Biologicas">Ciências Biológicas</option>
				    <option value="Tecnologo">Curso Tecnólogo</option>
				</select>
			</div>

			<div class="form-group col-sm-2">
				<label for="formacao">Condição de Estudo</label>
    			<select class="form-control" name="c-estudo" id="c-estudo">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
				    <option value="Matutino">Matutino</option>
				    <option value="Vespertino">Vespertino</option>
				    <option value="Noturno">Noturno</option>
				    <option value="Integral">Integral</option>
				</select>
			</div>

		</div>

		<div class="form-row">
			<div class = "col-sm-3"> 
				<div style="margin-bottom:10px;">Você trabalha atualmente?</div>
				<div class="checkbox-inline">
					<input class="form-check-input" name="profask" type="radio" value="s" id="profask1">
					<label class="form-check-label" for="profask1">Sim</label>
				</div>				
				<div class="checkbox-inline">
					<input class="form-check-input" name="profask" type="radio" value="n" id="profask2">
					<label class="form-check-label" for="profask2">Não</label>
				</div>		
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-sm-6">
				<label for="profissao" class = "col-form-label" value="profissao">Profissão</label>
	    		<input type="text" class="form-control" name="profissao" id="profissao" placeholder="Profissão">
			</div>
			<div class="form-group col-sm-6">
				<label for="h-trabalho">Condição de Trabalho</label>
    			<select class="form-control" name="h-trabalho" id="h-trabalho">
    				<option value="Selecione" selected disabled hidden>Selecione</option>
				    <option value="Período Completo">Período Completo</option>
				    <option value="Meio Período">Meio Período</option>
				    <option value="Eventualmente">Eventualmente</option>
				</select>
			</div>			
		</div>

		<fieldset>
			<legend> Uso de Drogas </legend>

			<div class="row align-items-center">
				<div class = "col-sm-3"> 
					<div style="margin-bottom:10px;">Você faz uso de Álcool?</div>
					<div class="form-check">
						<input class="form-check-input" name="alcool" type="radio" value="Nunca" id="alcool1">
						<label class="form-check-label" for="alcool1">Nunca fiz</label>
					</div>				
					<div class="form-check">
						<input class="form-check-input" name="alcool" type="radio" value="Diariamente" id="alcool2">
						<label class="form-check-label" for="alcool2">Diariamente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="alcool" type="radio" value="Semanalmente" id="alcool3">
						<label class="form-check-label" for="alcool3">Semanalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="alcool" type="radio" value="Mensalmente" id="alcool4">
						<label class="form-check-label" for="alcool4">Mensalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="alcool" type="radio" value="Vida" id="alcool5">
						<label class="form-check-label" for="alcool5">Alguma vez na Vida</label>
					</div>		
				</div>

				<div class = "col-sm-3"> 
					<div style="margin-bottom:10px;">Você faz uso de Tabaco?</div>
					<div class="form-check">
						<input class="form-check-input" name="tabaco" type="radio" value="Nunca" id="tabaco1">
						<label class="form-check-label" for="tabaco1">Nunca fiz</label>
					</div>				
					<div class="form-check">
						<input class="form-check-input" name="tabaco" type="radio" value="Diariamente" id="tabaco2">
						<label class="form-check-label" for="tabaco2">Diariamente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="tabaco" type="radio" value="Semanalmente" id="tabaco3">
						<label class="form-check-label" for="tabaco3">Semanalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="tabaco" type="radio" value="Mensalmente" id="tabaco4">
						<label class="form-check-label" for="tabaco4">Mensalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="tabaco" type="radio" value="Vida" id="tabaco5">
						<label class="form-check-label" for="tabaco5">Alguma vez na Vida</label>
					</div>		
				</div>

				<div class = "col-sm-3"> 
					<div style="margin-bottom:10px;">Você faz uso de Alguma outra Droga?</div>
					<div class="form-check">
						<input class="form-check-input" name="odroga" type="radio" value="Nunca" id="odroga1">
						<label class="form-check-label" for="odroga1">Nunca fiz</label>
					</div>				
					<div class="form-check">
						<input class="form-check-input" name="odroga" type="radio" value="Diariamente" id="odroga2">
						<label class="form-check-label" for="odroga2">Diariamente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="odroga" type="radio" value="Semanalmente" id="odroga3">
						<label class="form-check-label" for="odroga3">Semanalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="odroga" type="radio" value="Mensalmente" id="odroga4">
						<label class="form-check-label" for="odroga4">Mensalmente</label>
					</div>	
					<div class="form-check">
						<input class="form-check-input" name="odroga" type="radio" value="Vida" id="odroga5">
						<label class="form-check-label" for="odroga5">Alguma vez na Vida</label>
					</div>		
				</div>
			</div>
		</fieldset>
  	</fieldset>

  	<fieldset> 
  		<legend> Hábitos de Jogo </legend>

  		<div class="form-row">
  			<div class = "form-group col-sm-6"> 
				<div style="margin-bottom:10px;">Com que frequência você joga videogame?</div>			
				<div class="form-check">
					<input class="form-check-input" name="jogo-freq" type="radio" value="Diariamente" id="jogo-freq1">
					<label class="form-check-label" for="jogo-freq1">Diariamente</label>
				</div>	
				<div class="form-check">
					<input class="form-check-input" name="jogo-freq" type="radio" value="Semanalmente" id="jogo-freq2">
					<label class="form-check-label" for="jogo-freq2">Semanalmente</label>
				</div>	
				<div class="form-check">
					<input class="form-check-input" name="jogo-freq" type="radio" value="Mensalmente" id="jogo-freq3">
					<label class="form-check-label" for="jogo-freq3">Mensalmente</label>
				</div>					
			</div>

			<div class="form-group col-sm-6">
			    <label for="horasporsemana">Em média, quantas horas por semana você costuma jogar?</label>
			    <div class="input-group">
				    <input type="number" class="form-control" style="max-width: 80px;" name="horasporsemana" id="horasporsemana" min='1' max="168">
				    <div class="input-group-append">
		    			<span class="input-group-text" id="basic-addon1">Hora/Semana</span>
		  			</div>
	  			</div>
  			</div>  			
  		</div>

	  	<div class='form-row'>
	  		<div class="form-group col-sm-6">
			    <label for="jogoporvida">Aproximadamente, há quanto tempo em sua vida você joga videogame?</label>
			    <div class="input-group">
				    <input type="number" class="form-control" style="max-width: 80px;" name="jogoporvida" id="jogoporvida" min='1' max="69">
				    <div class="input-group-append">
		    			<span class="input-group-text" id="basic-addon2">Anos</span>
		  			</div>
	  			</div>
  			</div>

  			<div class="form-group col-sm-6">
			    <label for="sessaojogo">Quanto tempo, em média, você passa em uma sessão de jogo?</label>
			    <div class="input-group">
				    <input type="number" class="form-control" style="max-width: 80px;" name="sessaojogo" id="sessaojogo" min='1' max="48">
				    <div class="input-group-append">
		    			<span class="input-group-text" id="basic-addon3">Minutos</span>
		  			</div>
	  			</div>
  			</div>
	  	</div>

	  	<div class="form-row">
	  		<div class = "col"> 
					<div style="margin-bottom:10px;">
						Você joga videogame competitivamente e/ou como parte de uma equipe profissional?
					</div>
					<div class="form-check-inline">
						<input class="form-check-input" name="comp" type="radio" value="s" id="comp1">
						<label class="form-check-label" for="comp1">Sim</label>
					</div>				
					<div class="form-check-inline">
						<input class="form-check-input" name="comp" type="radio" value="n" id="comp2">
						<label class="form-check-label" for="comp2">Não</label>
					</div>	
				</div>
	  	</div>
  	</fieldset>
  	<fieldset>
  		<legend> Preferências de Jogo </legend>
  		<div class="row">
  			<div class="table-responsive">
	  			<table class="table">
					<thead>
					    <tr>
					    	<th scope="col">Ordem</th>
					    	<th scope="col">Título do Jogo</th>
					    	<th scope="col">Horas por semana</th>
					    	<th scope="col">Singleplayer ou multiplayer</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>
					      	<div class="form-group">
	    						<label class="sr-only" for="gamep1">Jogo 1</label>
	    						<input type="text" class="form-control" id="gamep1" name="gamep1" placeholder="Jogo 1">
 							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-time1">Horas por semana no Jogo 1</label>								
								<input type="number" class="form-control" name="gamep-time1" id="gamep-time1" min='1' max="168">			
  							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-mode1">Modo preferido para Jogo 1</label>
				    			<select class="form-control" name="gamep-mode1" id="gamep-mode1">
				    				<option value="Selecione" selected disabled hidden>Selecione</option>
								    <option value="Singleplayer">Singleplayer</option>
								    <option value="Multiplayer">Multiplayer</option>							     
								</select>
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>
					      	<div class="form-group">
	    						<label class="sr-only" for="gamep-time2">Jogo 2</label>
	    						<input type="text" class="form-control" id="gamep-time2" name="gamep-time2" placeholder="Jogo 2">
 							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-time2">Horas por semana no Jogo 2</label>								
								<input type="number" class="form-control" name="gamep-time2" id="gamep-time2" min='1' max="168">			
  							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-mode1">Modo preferido para Jogo 2</label>
				    			<select class="form-control" name="gamep-mode2" id="gamep-mode2">
				    				<option value="Selecione" selected disabled hidden>Selecione</option>
								    <option value="Singleplayer">Singleplayer</option>
								    <option value="Multiplayer">Multiplayer</option>							     
								</select>
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>
					      	<div class="form-group">
	    						<label class="sr-only" for="gamep3">Jogo 3</label>
	    						<input type="text" class="form-control" id="gamep3" name="gamep3" placeholder="Jogo 3">
 							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-time3">Horas por semana no Jogo 3</label>								
								<input type="number" class="form-control" name="gamep-time3" id="gamep-time3" min='1' max="168">			
  							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-mode1">Modo preferido para Jogo 3</label>
				    			<select class="form-control" name="gamep-mode3" id="gamep-mode3">
				    				<option value="Selecione" selected disabled hidden>Selecione</option>
								    <option value="Singleplayer">Singleplayer</option>
								    <option value="Multiplayer">Multiplayer</option>							     
								</select>
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">4</th>
					      <td>
					      	<div class="form-group">
	    						<label class="sr-only" for="gamep4">Jogo 4</label>
	    						<input type="text" class="form-control" id="gamep4" name="gamep4" placeholder="Jogo 4">
 							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-time4">Horas por semana no Jogo 4</label>								
								<input type="number" class="form-control" name="gamep-time4" id="gamep-time4" min='1' max="168">			
  							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-mode1">Modo preferido para Jogo 4</label>
				    			<select class="form-control" name="gamep-mode4" id="gamep-mode4">
				    				<option value="Selecione" selected disabled hidden>Selecione</option>
								    <option value="Singleplayer">Singleplayer</option>
								    <option value="Multiplayer">Multiplayer</option>							     
								</select>
							</div>
					      </td>
					    </tr>
					    <tr>
					      <th scope="row">5</th>
					      <td>
					      	<div class="form-group">
	    						<label class="sr-only" for="gamep5">Jogo 5</label>
	    						<input type="text" class="form-control" id="gamep5" name="gamep5" placeholder="Jogo 5">
 							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-time5">Horas por semana no Jogo 5</label>								
								<input type="number" class="form-control" name="gamep-time5" id="gamep-time5" min='1' max="168">			
  							</div>
					      </td>
					      <td>
					      	<div class="form-group">
								<label class="sr-only" for="gamep-mode1">Modo preferido para Jogo 5</label>
				    			<select class="form-control" name="gamep-mode5" id="gamep-mode5">
				    				<option value="Selecione" selected disabled hidden>Selecione</option>
								    <option value="Singleplayer">Singleplayer</option>
								    <option value="Multiplayer">Multiplayer</option>							     
								</select>
							</div>
					      </td>
					    </tr>
					  </tbody>
				</table>
		</div>
  		</div>
  	</fieldset>







<br><br><br><br><br><br><br><br>
		<div class="form-check">
		<p>Você se sente preocupado com o seu comportamento em relação aos videogames?
		(Exemplos: Pensa sobre sessões de jogos anteriores ou antecipa a próxima sessão que irá jogar; Jogar tornou-se a principal atividade do seu dia-a-dia.) </p>
		 <input class="form-check-input" type="radio" name="q1" id="q1-1" value="1">
		 <label class="form-check-label" for="q1-1">Nunca</label>
		 <input class="form-check-input" type="radio" name="q2" id="q1-2" value="2">
		 <label class="form-check-label" for="q1-2">Raramente</label>
		 <input class="form-check-input" type="radio" name="q1" id="q1-3" value="3">
		 <label class="form-check-label" for="q1-3">Algumas vezes</label>
		 <input class="form-check-input" type="radio" name="q1" id="q1-4" value="4">
		 <label class="form-check-label" for="q1-4">Frequentemente</label>
		 <input class="form-check-input" type="radio" name="q1" id="q1-5" value="5">
		 <label class="form-check-label" for="q1-5">Quase sempre</label>
		</div>


		<label for="q1"> Você se sente preocupado com o seu comportamento em relação aos videogames?
		(Exemplos: Pensa sobre sessões de jogos anteriores ou antecipa a próxima sessão que irá jogar; Jogar tornou-se a principal atividade do seu dia-a-dia.) </label>
			<input type="radio" name = "q1" value = "Nunca">
			<input type="radio" name = "q1" value = "Raramente">
			<input type="radio" name = "q1" value = "Algumas Vezes">
			<input type="radio" name = "q1" value = "Frequentemente">
			<input type="radio" name = "q1" value = "Quase Sempre">
		<label for="q2"> Você se sente mais irritado(a), ansioso(a) ou até mesmo triste quando tenta reduzir ou parar de jogar? </label>
		<label for="q3"> Você sente necessidade de passar cada vez mais tempo jogando para obter satisfação ou prazer? </label>
		<label for="q4"> Você falha sistematicamente quando tenta reduzir ou deixar de jogar? </label>
		<label for="q5"> Você perdeu o interesse por outras atividades de lazer em função do seu envolvimento com os videogames? </label>
		<label for="q6"> Você já continuou a jogar com a mesma intensidade mesmo sabendo que isso estava causando problemas entre você e outras pessoas? </label>
		<label for="q7"> Você já escondeu de algum familiar, terapeuta ou outra pessoa, a quantidade de tempo que passou jogando? </label>
		<label for="q8"> Você joga para evitar ou aliviar sentimentos difíceis (Exemplos: impotência, culpa, ansiedade)? </label>
		<label for="q9"> Você já colocou em risco, perdeu um relacionamento importante, oportunidade de trabalho ou educacional, por causa dos videogames?) </label>
	</form>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>