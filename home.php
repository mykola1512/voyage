<div class="container-fluid">
    <div class="container">
    <header class="text-center mb-5">
        <h1 class="homelabel h1-pers" style="margin-top: 60px; margin-bottom: 40px;">Descubra as Melhores Viagens na Europa!</h1>
        <p class="home-p-dec">Planeje sua próxima aventura com as melhores ofertas e dicas.</p>
    </header>
    <h2 style="margin-top: 60px; margin-bottom: 40px;" class="h2-pers">Destinos em Destaque</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="../imagens/paris.jpg" class="card-img-top" alt="Paris">
                <div class="card-body">
                    <h5 class="card-title">Paris</h5>
                    <p class="card-text">Explore a Cidade Luz com seus pontos turísticos icônicos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../imagens/roma.jpg" class="card-img-top" alt="Roma">
                <div class="card-body">
                    <h5 class="card-title">Roma</h5>
                    <p class="card-text">Descubra a história antiga e a deliciosa culinária italiana.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="../imagens/barcelona.jpg" class="card-img-top" alt="Barcelona">
                <div class="card-body">
                    <h5 class="card-title">Barcelona</h5>
                    <p class="card-text">Mergulhe na arte e arquitetura vibrantes da cidade.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 style="margin-top: 60px; margin-bottom: 40px;" class="h2-pers">Ofertas Especiais</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Pacote de Verão para Lisboa!</h5>
                    <br>
                    <p class="card-text">Aproveite o sol e a cultura. Pacote com 20% de desconto!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Viagem para Londres!</h5>
                    <br>
                    <p class="card-text">Experimente a vida na capital britânica. Ofertas por tempo limitado!</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h5 class="card-title">Descubra Amsterdã!</h5>
                    <br>
                    <p class="card-text">Uma cidade única com canais e cultura. Reserve agora e ganhe um brinde!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <h1 style="margin-top: 60px; margin-bottom: 40px;" class="h2-pers">Voyage - Pesquisa de Voos por Aeroportos</h1>
    <form action="index.php" method="GET" style="margin-bottom: 50px;">
        <input type="hidden" name="page" value="listar_destinos">
        <div class="form-group">
            <label for="origin" class="homelabel">Origem:</label>
            <input type="text" id="origin" name="origin" class="form-control" placeholder="Ex: LIS" required ></div>
        <div class="form-group">
            <label for="destination" class="homelabel">Destino:</label>
            <input type="text" id="destination" name="destination" class="form-control" placeholder="Ex: MAD" required></div>
        <div class="form-group">
            <label for="date" class="homelabel">Data de Partida:</label>
            <input type="date" id="date" name="date" class="form-control" required></div>
            <button type="submit" class="btn btn-primary padd btnhome">Buscar Voos</button>
    </form>
</div>
</div>
</div>