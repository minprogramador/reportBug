<?php


$dados = array(
	'dados' => array(
	'limite' => 100,
	'usado' => 0,
	'vencimento' => "22/03/2019",
	'status' => true
	)
);

//$dados = array();
header("Content-type:application/json");
$dados = json_encode($dados);
echo $dados;