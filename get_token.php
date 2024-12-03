<?php
$client_id = '9cNJlryG7XAYX71Mh1VMbBZKSU9D2AyU';
$client_secret = 'XSRQB2GGdXQoFntk';

$url = "https://test.api.amadeus.com/v1/security/oauth2/token";

$data = [
    'grant_type' => 'client_credentials',
    'client_id' => $client_id,
    'client_secret' => $client_secret,
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($ch);
curl_close($ch);

$response_data = json_decode($response, true);
$access_token = $response_data['access_token'];

?>
