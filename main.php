<?php
function changeValue(){
	$escolha; $resetter;



	if (isset($_GET['choice'])) {$escolha = $_GET['choice'];}
	if (isset($_GET['value'])) {$value = $_GET['value'];}	
	if(isset($_GET['resetter'])) {$resetter = $_GET['resetter'];}

	
	if ($resetter == 0){
		if ($escolha == 1){ 
			$value = $value / 2;
			} elseif ($escolha == 2){
				$value = ($value + 1000) / 2;
			} 	
		} else if ($resetter == 1) {
			$value = 500;
		}		
	
	return $value;
}

$changeValue = changeValue();
echo $changeValue;


?>