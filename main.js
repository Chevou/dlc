
window.onload = function (){
	document.getElementById('btn1').onclick = buttonId;
	document.getElementById('btn2').onclick = buttonId;
	};

// Identifica qual botão foi pressionado
function buttonId() {	
	var escolha = this.id;
	if (escolha == "btn1") {clicked = 1;}
		else if (this.id == "btn2") {clicked = 2;}
			else {clicked == 0;}

	// configuração do AJAX, enviando por GET para PHP
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "main.php?choice=" + clicked, true);
	xhttp.onload = function () {		
			var resposta = document.getElementById("val-imediato");
			resposta.innerHTML = xhttp.responseText;	
		};
	xhttp.send(); 
	};

