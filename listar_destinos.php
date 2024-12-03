<?php
include 'amadeus_api.php';

$origin = $_GET['origin'] ?? null;
$destination = $_GET['destination'] ?? null;
$departureDate = $_GET['date'] ?? null;

if ($origin && $destination && $departureDate) {
    $params = [
        "originLocationCode" => $origin,
        "destinationLocationCode" => $destination,
        "departureDate" => $departureDate,
        "adults" => 1
    ];

    $data = makeApiRequest('/v2/shopping/flight-offers', $params);

    echo "<h2 class='titulo'>Resultados de Voos de $origin para $destination em $departureDate</h2>";

    if (isset($data['data']) && !empty($data['data'])) {
        foreach ($data['data'] as $flight) {
            echo "<div class='flight-result'>";
            echo "<p class='preco'>Preço: " . $flight['price']['total'] . " EUR</p>";
            echo "<p>Partida de: " . $flight['itineraries'][0]['segments'][0]['departure']['iataCode'] . " às " . $flight['itineraries'][0]['segments'][0]['departure']['at'] . "</p>";
            echo "<p>Chegada em: " . $flight['itineraries'][0]['segments'][0]['arrival']['iataCode'] . " às " . $flight['itineraries'][0]['segments'][0]['arrival']['at'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum voo encontrado para os critérios de pesquisa especificados, esperimente escolher outra data ou outro aeroporto.</p>";
    }
} else {
    echo "<p>Por favor, forneça a origem, destino e data para buscar voos.</p>";
}
?>
