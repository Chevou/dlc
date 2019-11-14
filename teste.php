<?php

for ($i = 1; $i <= 2; $i++) {
	$print1 = "oi";
	$print2 = "tchau";

	$o = ${'print' . $i};
	echo $o;
	
};

for ($i = 1; $i <= 5; $i++) {

	$query2 = ${'query2_' . $i};
	$oderpg = ${'orderpg' . $i};
	$gamep = ${'gamep' . $i};
	$gamep_time = ${'gamep_time' . $i};
	$gamep_mode = ${'gamep_mode' . $i};


	$query = "INSERT INTO preferencia_jogo (
		user_id,
		ordem,
		titulo,
		hora_semanag,
		gamep_mode
		)
		VALUES (
		'$user_id',
		'$ordergp1',
		'$gamep1',
		'$gamep_time1',
		'$gamep_mode1'
	) ";

insert(${$query2});
};


?>