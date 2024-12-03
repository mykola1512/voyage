<?php
function buscarVoos($destino, $data) {
    $api_key = "9cNJlryG7XAYX71Mh1VMbBZKSU9D2AyU";
    $url = "https://api.exemplo.com/v1/voos?destino=" . urlencode($destino) . "&data=" . urlencode($data);
    $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer $api_key",
            "Content-Type: application/json"
        ]);

    $response = curl_exec($curl);
    
    if (curl_errno($curl)) {
        return ['error' => curl_error($curl)];
    }

    curl_close($curl);
    
    return json_decode($response, true);
}
?>
