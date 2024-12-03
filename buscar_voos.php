<?php
include 'get_token.php';

$origem = 'LIS';
$destino = 'PAR';
$data_partida = '2024-11-15';

$url = "https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=$origem&destinationLocationCode=$destino&departureDate=$data_partida";

$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $access_token"
    ]);

$response = curl_exec($ch);
    curl_close($ch);

$response_data = json_decode($response, true);

if (!empty($response_data['data'])) {
    foreach ($response_data['data'] as $voo) {
        $preco = $voo['price']['total'];
        $duracao = $voo['itineraries'][0]['duration'];
        echo "<p>Preço: €$preco, Duração: $duracao</p>";
    }
} else {
    echo "Nenhum voo encontrado, experimente inserir outra data ou aeroporto.";
}
?>