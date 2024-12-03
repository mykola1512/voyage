<?php
require_once 'conexao.php';

if (!isset($_SESSION['utilizador_id'])) {
    header('Location: index.php?page=login');
    exit();
}

$utilizador_id = $_SESSION['utilizador_id'];

$sql = "SELECT id, nome, email FROM utilizadores WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $utilizador_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $utilizador = $result->fetch_assoc();
} else {
    echo "Utilizador não encontrado.";
    exit();
}
?>
<div class="container mt-5" style="flex-direction: column">
    <h2  style="font-size:40px; margin-bottom:50px">Perfil de <?php echo htmlspecialchars($utilizador['nome']); ?></h2>
    <form action="atualizar_perfil.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $utilizador['id']; ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($utilizador['nome']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($utilizador['email']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary btnhome btnperf" style="font-size:20px; background-color:rgba(160, 0, 0); box-shadow: 0 5px 6px black; border-color:rgba(160, 0, 0)">Salvar Alterações</button>
    </form>
    <hr>
    <h4  style="font-size:40px;margin-bottom:50px">Alterar Senha</h4>
    <form action="atualizar_senha.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $utilizador['id']; ?>">
        <div class="mb-3">
            <label for="senha_atual" class="form-label">Senha Atual</label>
            <input type="password" class="form-control" id="senha_atual" name="senha_atual" required>
        </div>
        <div class="mb-3">
            <label for="nova_senha" class="form-label">Nova Senha</label>
            <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
        </div>
        <div class="mb-3">
            <label for="confirmar_senha" class="form-label">Confirmar Nova Senha</label>
            <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
        </div>
        <button type="submit" class="btn btn-warning btnhome btnperf" style="font-size:20px; background-color:rgba(160, 0, 0); color:white; box-shadow: 0 5px 6px black; border-color:rgba(160, 0, 0)">Alterar Senha</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>