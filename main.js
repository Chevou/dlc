
window.onload = function (){
	document.getElementById('btn1').onclick = buttonId;
	document.getElementById('btn2').onclick = buttonId;
	};


function buttonId(clicked) {
	alert(this.id);
};







/* var xhttp = new XMLHttpRequest();
xhttp.open("GET", "main.php?name=" + imediato, true);
xhttp.onload = function () {
	
		var resposta = document.getElementById("val-imediato");
		resposta.innerHTML = xhttp.responseText;	
	};
xhttp.send(); */
