<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://explorer1.spotmecoin.com/getinfo');
$result = curl_exec($ch);
$obj = json_decode($result, TRUE);
curl_close($ch);
//print_r($obj);
$difficulty = $obj['difficulty'];
$hashrate = round($difficulty / 120);
print_r($hashrate);
?>