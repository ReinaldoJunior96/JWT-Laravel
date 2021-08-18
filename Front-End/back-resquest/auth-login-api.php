<?php
$authLogin = array(
    'email' => $_POST['email'],
    'password' => $_POST['password'],);

$authUserJson = json_encode($authLogin);

//print_r($dados_json);
/* Cabeçalho */
$url = 'http://127.0.0.1:8000/api/auth/login';
$cabecalho = array('Content-Type: application/json', 'Accept: application/json');
$ch = curl_init();
/* Request */
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
curl_setopt($ch, CURLOPT_POSTFIELDS, $authUserJson);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

$resposta = curl_exec($ch);
$responseDecoder = json_decode($resposta);

curl_close($ch);
if ($responseDecoder->status == 'success'):
    session_start();
    $_SESSION['token'] =  $responseDecoder->token->token;
    header('location: ../dashboard.php');
else:
    header('location:../index.php');

endif;
die();


