<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    $sql = "SELECT * FROM utilizadores WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['erro_registro'] = "O email já está em uso. Por favor, tente outro.";
        header("Location: index.php?page=registo");
        
    } else {
        $sql = "INSERT INTO utilizadores (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);

        if ($stmt->execute()) {
            $_SESSION['utilizador_nome'] = $nome;
            header("Location: index.php?page=home");
            exit();
        } else {
                $_SESSION['erro_registro'] = "Erro ao registar utilizador. Tente novamente.";
                header("Location: index.php?page=registo");
                exit();
        }
    }

    $stmt->close();
}
$conn->close();
?>
