<?php
$amount = '1'; //Amount to transact 
$phonenuber = '07xxxxxxx'; // Phone number paying
$Account_no = 'JONAH-TECH SOLUTIONS'; // Enter account number optional
$url = 'https://tinypesa.com/api/v1/express/initialize';
$data = array(
    'amount' => $amount,
    'msisdn' => $phonenuber,
    'account_no'=>$Account_no
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: QLyaVXqwEx4' // Replace with your api key
 );
$info = http_build_query($data);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
$msg_resp = json_decode($resp);

if($msg_resp ->success == 'true'){
    echo "WAIT FOR NEVEREST STK POP UP";
}
echo 'Transaction Completed  successfully. Now redirecting...';
  
  header("Location: https://example.co.ke/");

?>



