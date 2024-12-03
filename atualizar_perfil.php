<?php
session_start();
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE utilizadores SET nome = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nome, $email, $id);

    if ($stmt->execute()) {
        $_SESSION['mensagem'] = "Perfil atualizado com sucesso!";
        header('Location: index.php?page=perfil');
        exit();
    } else {
        echo "Erro ao atualizar o perfil: " . $conn->error;
    }
} else {
    header('Location: index.php?page=perfil');
    exit();
}
?>