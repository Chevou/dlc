
window.onload = function (){
	var btn1 = document.getElementById('btn1');
	var bnt2 = document.getElementById('btn2');
	btn1.onclick = delayDiscounting;
	btn2.onclick = delayDiscounting;
	};

var count = 0;
var expressao = "";
var resetter = 0;
var contador = 0;
var valdb = 1;


// Ide
function delayDiscounting() {	
	
	//identifica botão clicado, enviar valor para cálculo no PHP
	var escolha = this.id;
	if (escolha == "btn1") {clicked = 1;}
		else if (this.id == "btn2") {clicked = 2;}
			else {clicked == 0;}

	var value = document.getElementById("val-imediato");
	var valor = value.innerHTML;

	// configuração do AJAX, enviando por GET para PHP
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "main.php?choice=" + clicked + "&value=" + valor + "&resetter=" + resetter + "&contador=" + contador + "&valdb=" + valdb, true);
	xhttp.onload = function () {		
			var resposta = document.getElementById("val-imediato");
			resposta.innerHTML = xhttp.responseText;
			console.log(xhttp.responseText);	
		};
	xhttp.send(); 
	

	//Muda o valor do intervalo atrasado
	function intervalChanger() {
		contador++;

		function taskDefiner () {
			var current_path = window.location.href;

			if (current_path.includes('dlc1.php')) {
				var valoresAtrasados = ["Em 1 semana", "Em 2 semanas", "Em 1 mês", "Em 6 meses", "Em 1 ano", "Em 3 anos", "Em 10 anos"];
			

				if (contador > 0 && contador < 6) {expressao = valoresAtrasados[0]; valdb = 1;} 
				else if (contador >= 6 && contador < 12) {expressao = valoresAtrasados[1]; valdb = 2;}
				else if (contador >= 12 && contador < 18) {expressao = valoresAtrasados[2]; valdb = 3;}
				else if (contador >= 18 && contador < 24) {expressao = valoresAtrasados[3]; valdb = 4;}
				else if (contador >= 24 && contador < 30) {expressao = valoresAtrasados[4]; valdb = 5;}
				else if (contador >= 30 && contador < 36) {expressao = valoresAtrasados[5]; valdb = 6;}
				else if (contador >= 36 && contador < 42) {expressao = valoresAtrasados[6]; valdb = 7;}

			} else if (current_path.includes('dlc2.php')) {
				var valoresAtrasados = ["Em 1 hora", "Em 2 horas", "Em 6 horas", "Em 1 dia", "Em 2 dias", "Em 4 dias", "Em 7 dias"];
			
				if (contador > 0 && contador < 6) {expressao = valoresAtrasados[0]; valdb = 8} 
				else if (contador >= 6 && contador < 12) {expressao = valoresAtrasados[1]; valdb = 9}
				else if (contador >= 12 && contador < 18) {expressao = valoresAtrasados[2]; valdb = 10;}
				else if (contador >= 18 && contador < 24) {expressao = valoresAtrasados[3]; valdb = 11;}
				else if (contador >= 24 && contador < 30) {expressao = valoresAtrasados[4]; valdb = 12;}
				else if (contador >= 30 && contador < 36) {expressao = valoresAtrasados[5]; valdb = 13;}
				else if (contador >= 36 && contador < 42) {expressao = valoresAtrasados[6]; valdb = 14;}
			}

			btn2.value = expressao;
			console.log(valdb); 
		}
		taskDefiner();
	}

	//Reset valor imediado após as 6 tentativas;
	function reset () {
		if (contador == 5 || contador == 11 || contador == 17 || contador == 23 || contador == 29 || contador == 35 || contador == 41){
			resetter = 1;
		} else
			resetter = 0;
	}

	intervalChanger();
	reset();

};


