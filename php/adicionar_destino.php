<?php
include 'conexao.php';
?>
    <div class="container mt-4">
        <h1>Adicionar Novo Destino</h1>
        <form action="processar_destino.php" method="POST">
            <div class="mb-3">
                <label for="destino" class="form-label">Destino</label>
                <input type="text" class="form-control" id="destino" name="destino" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" step="0.01" class="form-control" id="preco" name="preco" required>
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Destino</button>
        </form>
    </div>