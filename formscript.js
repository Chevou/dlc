function consentment(){
	var consentButton = document.getElementById('consent-button');
	var consentCheck = document.getElementById('consentimento');

	if (consentCheck.checked == true) {
		consentButton.disabled = false;
	} else {
		consentButton.disabled = true;
	}
}; 

function isgamer() {
	var isGamerRadio1 = document.getElementById('is_gamer1');
	var isGamerRadio2 = document.getElementById('is_gamer2');
	var divNotGamer = document.getElementById('not-gamer');
	var divGamer1 = document.getElementById('gamer1');
	var divGamer2 = document.getElementById('gamer2');
	var divGamer3 = document.getElementById('gamer3');

	if (isGamerRadio1.checked == true) {
		divGamer1.classList.remove("d-none");
		divGamer2.classList.remove("d-none");
		divGamer3.classList.remove("d-none");
		divNotGamer.classList.add("d-none");

	} else if (isGamerRadio2.checked == true) {
		divNotGamer.classList.remove("d-none");
		divGamer1.classList.add("d-none");
		divGamer2.classList.add("d-none");
		divGamer3.classList.add("d-none");

		isGamerRadio1.disabled = true;
		isGamerRadio2.disabled = true;


	} 
};

// Funções de Formulário

function isworker () {
	var profask1 = document.getElementById('profask1');
	var profasl2 = document.getElementById('profask2');
	var profissao = document.getElementById('profissao');
	var h_trabalho = document.getElementById('h_trabalho');


	if (profask1.checked == true) {
		profissao.disabled = false;
		h_trabalho.disabled = false;
	} else if (profask2.checked == true) {
		profissao.disabled = true;
		h_trabalho.disabled = true;
	}
};

function isstudent () {
	var is_student1 = document.getElementById('is_estudante1');
	var is_student2 = document.getElementById('is_estudante2');
	var horario_estudo = document.getElementById('horario_estudo');


	if (is_student1.checked == true) {
		horario_estudo.disabled = false;

		return 1;
	} else if (is_student2.checked == true) {
		horario_estudo.disabled = true;

		return 0;
	}
};

function grade() {
	var escolaridade = document.getElementById('escolaridade');
	var formacao = document.getElementById('formacao');

	if (escolaridade.value == "ESC" || escolaridade.value == "PGC" || escolaridade.value == "ESI" || escolaridade.value == "PGI") {
		formacao.disabled = false;
		formacao.required = true;
	} else {
		formacao.disabled = true;
	}
};

function prosseguir() {
	var current_path = window.location.href;

	if (current_path.includes('intro2.php')) {
		window.location.replace('../dlc/dlc1.php');
	} else if (current_path.includes('intro3.php')) {
		window.location.replace('../dlc/dlc2.php')};
};


