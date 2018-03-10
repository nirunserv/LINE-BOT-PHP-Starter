<?php
$access_token = 'EWwo8d7s4YvBzxU+xPGrYn/BJd4ieRlxNam+Nx84EhNMNrhM0j50Z4sLM1X9CKVPOCmFw0q8dR0SLZ275uNoDrbynSISs787YTBTQCTcvqQB7bCC3kYxsKKW1yFPUEv77yU+3eVTCzPYvv8MlfuBqwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

?>
