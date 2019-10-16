
window.onload = function (){
	var btn1 = document.getElementById('btn1');
	var bnt2 = document.getElementById('btn2');
	btn1.onclick = delayDiscounting;
	btn2.onclick = delayDiscounting;
	};

var count = 0;
var expressão = "";
var resetter = 0;

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
	xhttp.open("GET", "main.php?choice=" + clicked + "&value=" + valor + "&resetter=" + resetter, true);
	xhttp.onload = function () {		
			var resposta = document.getElementById("val-imediato");
			resposta.innerHTML = xhttp.responseText;	
		};
	xhttp.send(); 
	

	//Muda o valor do intervalo atrasado
	function intervalChanger() {
		
		function counter () {
		count++
		return count;
		}
		contador = counter();

		var valoresAtrasados = ["Em 1 semana", "Em 2 semanas", "Em 1 mês", "Em 6 meses", "Em 1 ano", "Em 3 anos", "Em 10 anos"];

		if (contador > 0 && contador < 6) {expressao = valoresAtrasados[0];} 
		else if (contador >= 6 && contador < 12) {expressao = valoresAtrasados[1];}
		else if (contador >= 12 && contador < 18) {expressao = valoresAtrasados[2];}
		else if (contador >= 18 && contador < 24) {expressao = valoresAtrasados[3];}
		else if (contador >= 24 && contador < 30) {expressao = valoresAtrasados[4];}
		else if (contador >= 30 && contador < 36) {expressao = valoresAtrasados[5];}
		else if (contador >= 36 && contador < 42) {expressao = valoresAtrasados[6];}



		btn2.value = expressao;
	}

	//Reset valor imediado após as 6 tentativas;
	function reset () {
		if (contador == 5 || contador == 11 || contador == 17 || contador == 23 || contador == 29 || contador == 35){
			resetter = 1;
		} else {
			resetter = 0;
		}
		return console.log(resetter);

	}

	intervalChanger();
	reset();

};


