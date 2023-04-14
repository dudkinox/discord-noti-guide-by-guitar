<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$webhook_url = 'ใส่ url webhook';

$requestBody = json_decode(file_get_contents('php://input'), true);
$message = array('content' => '[BACKEND] Deploy Success!!! :guitar:'.$requestBody["commit"]);

$curl = curl_init($webhook_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_exec($curl);
curl_close($curl);
?>
