<?php
  $webhook_url = 'ลิงค์นี้ ไปก็อบจาก ตั้งค่าแชท chanal แล้วไปก็อบ webhook มา';
  $commit = isset($_GET["commit"]) ? $_GET["commit"] : '';

  $message = array('content' => 'Deploy success by guitar! \n commit : '.$commit);

  $curl = curl_init($webhook_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($message));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($curl);
  curl_close($curl);
?>
