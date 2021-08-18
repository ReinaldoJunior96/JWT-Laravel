<?php
$dados = array(
    'prod_name'=>$_POST['prod_name'],
    'description'=>$_POST['description']
);
$dadosJson = json_encode($dados);


session_start();

/* Cabeçalho */

$url = 'http://localhost:8000/api/produtos';
$token = $_SESSION['token'];

/* Cabeçalho */
$cabecalho = array('Content-Type: application/json', 'Accept: application/json', 'Authorization: Bearer ' . $token);
$ch = curl_init();
/* Request */
curl_setopt($ch, CURLOPT_URL,            $url);
curl_setopt($ch, CURLOPT_HTTPHEADER,     $cabecalho);
curl_setopt($ch, CURLOPT_POSTFIELDS,     $dadosJson);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST,           true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
$resposta = curl_exec($ch);
$responseDecoder = json_decode($resposta);
curl_close($ch);

var_dump($responseDecoder);

exit();
