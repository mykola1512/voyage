<nav class="navbar navbar-expand-lg" style="height: 110px">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=home">Voyage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link padd" href="index.php?page=home">Página Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link padd" href="index.php?page=aboutus">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['utilizador_nome'])): ?>
          <a class="navbar-text nav-link padd" href="index.php?page=perfil">Olá, <?php echo $_SESSION['utilizador_nome']; ?>!</a>
          <?php else: ?>
          <a class="nav-link padd" href="index.php?page=registo">Registo</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['utilizador_nome'])): ?>
          <a class="nav-link padd" href="sair.php">Sair</a>
          <?php else: ?>
          <a class="nav-link padd" href="index.php?page=login">Entrar</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>