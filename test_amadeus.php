<?php
include 'amadeus_api.php';

$token = getAccessToken();
if ($token) {
    echo "Token obtido com sucesso: " . $token;
} else {
    echo "Erro ao obter o token.";
}
?>
