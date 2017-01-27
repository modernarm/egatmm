<?php
$access_token = 'DUYA4s60l0QPGPfOoT9juZ3Qb4SsLohMXaHcOyg3izOJS9JFYFi26p4HuCNdMm3Y5rEUc6Xn3nLAijmdcLkT1xqkcfqVq3MSmVcMRhdEEdsP8w3svPvqABlmDV9kiwznpEeP2ywOPSerdejdH/3m3QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
