<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://zerogpt.p.rapidapi.com/api/v1/detectText",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'input_text' => 'C++ is a high-level, general-purpose programming language...'
  ]),
  CURLOPT_HTTPHEADER => [
    "X-RapidAPI-Host: zerogpt.p.rapidapi.com",
    "X-RapidAPI-Key: your-api-key-here",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>