<?php
session_start();
require ("./db.php");


function changeValue(){
 



	if (isset($_GET['choice'])) {$escolha = $_GET['choice'];}
	if (isset($_GET['value'])) {$value = $_GET['value'];}	
	if (isset($_GET['resetter'])) {$resetter = $_GET['resetter'];}
	if (isset($_GET['contador'])) {$contador = $_GET['contador'];}
	if (isset($_GET['valdb'])) {$valdb = $_GET['valdb'];}
	

	//defining which result row to save values
	$for_r1 = array(0, 6, 12, 18, 24, 30, 36); 
	$for_r2 = array(1, 7, 13, 19, 25, 31, 37);
	$for_r3 = array(2, 8, 14, 20, 26, 32, 38);
	$for_r4 = array(3, 9, 15, 21, 27, 33, 39);
	$for_r5 = array(4, 10, 16, 22, 28, 34, 40);
	$for_r6 = array(5, 11, 17, 23, 29, 35, 41);
	

if ($valdb >= 1 && $valdb <= 7 ){
	if ($resetter == 0){
		if ($escolha == 1){ 
			$value = $value / 2;
		} 
		elseif ($escolha == 2){
		$value = ($value + 1000) / 2;
		}
	}
	else if ($resetter == 1) {
		if ($escolha == 1){ 
			$value = $value / 2;
			} 
			elseif ($escolha == 2){
				$value = ($value + 1000) / 2;
			}
		$valor6 = $value;
		$value = 500;
	} 
}elseif ($valdb >= 8 && $valdb <= 14){
	if ($resetter == 0){
		if ($escolha == 1){ 
			$value = $value / 2;
		} 
		elseif ($escolha == 2){
		$value = ($value + 60) / 2;
		}
	}
	elseif ($resetter == 1) {
		if ($escolha == 1){ 
			$value = $value / 2;
			} 
			elseif ($escolha == 2){
				$value = ($value + 60) / 2;
			}
		$valor6 = $value;
		$value = 30;
	} 
}



		
	if (in_array($contador, $for_r1) ) {
		$user_id = $_SESSION['user_id'];
		$query = "INSERT INTO results (user_id, tempo_id, r1)
		VALUES ('$user_id', '$valdb', '$value')";
		insert($query);
		$_SESSION['result_insert'] = mysqli_insert_id(db_connect());
		$result_insert = $_SESSION['result_insert'];
	} 
	elseif (in_array($contador, $for_r2)) {
		$result_insert = $_SESSION['result_insert'];
		$query = "
				UPDATE results
				SET r2 = '$value'
				WHERE result_id = '$result_insert';";
		insert($query);
	}
	elseif (in_array($contador, $for_r3)) {
		$result_insert = $_SESSION['result_insert'];
		$user_id = $_SESSION['user_id'];
		$query = "
				UPDATE results
				SET r3 = '$value'
				WHERE result_id = '$result_insert';";
		insert($query);
	} 
	elseif (in_array($contador, $for_r4)) {
		$result_insert = $_SESSION['result_insert'];
		$user_id = $_SESSION['user_id'];
		$query = "
				UPDATE results
				SET r4 = '$value'
				WHERE result_id = '$result_insert';";
		insert($query);
	} 
	elseif (in_array($contador, $for_r5)) {
		$result_insert = $_SESSION['result_insert'];
		$user_id = $_SESSION['user_id'];
		$query = "
				UPDATE results
				SET r5 = '$value'
				WHERE result_id = '$result_insert';";
		insert($query);
	} 
	elseif (in_array($contador, $for_r6)) {
		$result_insert = $_SESSION['result_insert'];
		$user_id = $_SESSION['user_id'];
		$query = "
				UPDATE results
				SET r6 = '$valor6'
				WHERE result_id = '$result_insert';";
		insert($query);
		unset($valor6);
		unset($_SESSION['result_insert']);
	} 

 
		

return $value;

}

$changeValue = changeValue();
echo $changeValue;

?>