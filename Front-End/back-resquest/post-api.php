<?php
$dados = array(
    'name'=>$_POST['name'],
    'email'=>$_POST['email'],
    'password'=>$_POST['password'],
    'password_confirmation'=> $_POST['password']
);

$dadosJson = json_encode($dados);

//print_r($dados_json);
/* Cabeçalho */
$url       = 'http://127.0.0.1:8000/api/users';
$cabecalho = array('Content-Type: application/json', 'Accept: application/json');
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

curl_close($ch);
echo "<pre>";
var_dump($resposta);
echo "</pre>";

exit();
