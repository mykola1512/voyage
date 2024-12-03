<?php if (isset($_SESSION['erro_registro'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php 
                echo $_SESSION['erro_registro']; 
                unset($_SESSION['erro_registro']);
            ?>
        </div>
    <?php endif; ?>
<div class="container-fluid back-pers">
<form action="processar_registo.php" method="POST" style="width: 500px; font-size: 23px; font-weight: 500;" class="form-pers">
    <div class="mb-3 margin-vertical">
        <label for="nome" class="form-label homelabel">Nome</label>
        <input type="text" class="form-control margin-10" id="nome" name="nome" required>
    </div>
    <div class="mb-3 margin-vertical">
        <label for="email" class="form-label homelabel">Email</label>
        <input type="email" class="form-control margin-10" id="email" name="email" required>
    </div>
    <div class="mb-3 margin-vertical">
        <label for="senha" class="form-label homelabel">Senha</label>
        <input type="password" class="form-control margin-10" id="senha" name="senha" required>
    </div>
    <button type="submit" class="btn btn-primary btnhome margin-10" style="font-size: 20px">Registar</button>
</form>
</div>