<?php
session_start();
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $senha_atual = $_POST['senha_atual'];
    $nova_senha = $_POST['nova_senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if ($nova_senha !== $confirmar_senha) {
        $_SESSION['mensagem'] = "As senhas não coincidem.";
        header('Location: index.php?page=perfil');
        exit();
    }

    $sql = "SELECT senha FROM utilizadores WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $utilizador = $result->fetch_assoc();

    if (!password_verify($senha_atual, $utilizador['senha'])) {
        $_SESSION['mensagem'] = "Senha atual incorreta.";
        header('Location: index.php?page=perfil');
        exit();
    }

    $nova_senha_hash = password_hash($nova_senha, PASSWORD_BCRYPT);

    $sql = "UPDATE utilizadores SET senha = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nova_senha_hash, $id);

    if ($stmt->execute()) {
        $_SESSION['mensagem'] = "Senha alterada com sucesso!";
        header('Location: index.php?page=perfil');
        exit();
    } else {
        echo "Erro ao alterar a senha: " . $conn->error;
    }
} else {
    header('Location: index.php?page=perfil');
    exit();
}
?>