<?php if (isset($_SESSION['mensagem_erro'])): ?>
    <div class="alert alert-danger" role="alert">
        <?php
        echo $_SESSION['mensagem_erro'];
        unset($_SESSION['mensagem_erro']);
        ?>
</div>
<?php endif; ?>
<div class="container-fluid back-pers">
    <div class="row">
        <h2 class="homelabel" style="padding-bottom:45px; padding-top:75px; font-size:65px; font-weight:600; color: white">Login</h2> 
<form action="processar_login.php" method="POST" style="width: 500px;padding-bottom: 50px;margin-right:0px;" class="form-pers">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
</div>