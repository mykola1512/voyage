<?php
session_start();
include 'conexao.php';
include 'api.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destino = $_POST['destino'];
    $data = $_POST['data'];

    $sql = "INSERT INTO destinos (utilizador_id, destino, data) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $_SESSION['utilizador_id'], $destino, $data);
    $stmt->execute();
    $stmt->close();

    $resultados = buscarVoos($destino, $data);
    
    if (isset($resultados['data'])) {
        foreach ($resultados['data'] as $voo) {
            echo "Destino: $destino<br>";
            echo "Preço: " . $voo['price'] . "<br>";
        }
    } else {
        echo "Nenhum voo encontrado para $destino.";
    }
}
$conn->close();
?>