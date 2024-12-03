<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, nome, senha FROM utilizadores WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nome, $hashed_password);
        $stmt->fetch();

        if (password_verify($senha, $hashed_password)) {
            $_SESSION['utilizador_id'] = $id;
            $_SESSION['utilizador_nome'] = $nome;
            header("Location: index.php?page=home");
            exit();
        } else {
            $_SESSION['mensagem_erro'] = "Senha incorreta.";
            header("Location: index.php?page=login");
            exit();
        }
    } else {
        $_SESSION['mensagem_erro'] = "Utilizador não encontrado.";
        header("Location: index.php?page=login");
        exit();
    }

    $stmt->close();
}
$conn->close();
?>
