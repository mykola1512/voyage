<?php

$client_id = "9cNJlryG7XAYX71Mh1VMbBZKSU9D2AyU";
$client_secret = "XSRQB2GGdXQoFntk";
function getAccessToken() {
    global $client_id, $client_secret;

    if (isset($_SESSION['access_token']) && $_SESSION['token_expires'] > time()) {
        return $_SESSION['access_token'];
    }

    $url = "https://test.api.amadeus.com/v1/security/oauth2/token";

    $data = [
        "grant_type" => "client_credentials",
        "client_id" => $client_id,
        "client_secret" => $client_secret
    ];

    $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded"]);

    $response = curl_exec($ch);
        curl_close($ch);

    $response_data = json_decode($response, true);

    if (isset($response_data['access_token'])) {
        $_SESSION['access_token'] = $response_data['access_token'];
        $_SESSION['token_expires'] = time() + $response_data['expires_in'];
        return $_SESSION['access_token'];
    }

    return null;
}

function makeApiRequest($endpoint, $params = []) {
    $access_token = getAccessToken();
    if (!$access_token) return null;

    $url = "https://test.api.amadeus.com" . $endpoint . "?" . http_build_query($params);

    $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $access_token"]);

    $response = curl_exec($ch);
        curl_close($ch);

    return json_decode($response, true);
}
?>
