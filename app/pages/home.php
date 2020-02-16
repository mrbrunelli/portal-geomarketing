<script>
    window.onload = function() {
        toastr.info('Olá usuário', 'Login realizado com sucesso!')
    }
</script>

<!-- KPI DE PESQUISAS -->
<div id="contador" class="my-5">
    <div class="text-center py-5">
        <div class="row justify-content-around">
            <div class="col-md-3 shadow p-4 rounded">
                <h5>Total de pesquisas</h5>
                <h2 class="text-muted">4567</h2>
                <?= $_SESSION['UsuarioNome']; ?>
            </div>
            <div class="col-md-3 shadow p-4 rounded">
                <h5>Setor com mais pesquisas</h5>
                <h2 class="text-muted">Atacado</h2>
            </div>
            <div class="col-md-3 shadow p-4 rounded">
                <h5>Maior nota</h5>
                <h2 class="text-muted">Logística 9.5</h2>
            </div>
        </div>
    </div>
</div>


<!-- ÚLTIMAS PESQUISAS -->
<div id="pesquisa" class="my-5">
    <div class="container text-center">
        <h5>Últimas Pesquisas</h5>
        <div class="row justify-content-around mt-5">
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Logística<br>Data: 10/12/2019</small></p>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Varejo<br>Data: 10/12/2019</small></p>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Indústria<br>Data: 10/12/2019</small></p>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Atacado<br>Data: 10/12/2019</small></p>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Atacado<br>Data: 10/12/2019</small></p>
            </div>
            <div class="col-md-2">
                <a href=""><i class="fas fa-file-excel fa-3x text-success"></i></a>
                <p><small>Pesquisa Atacado<br>Data: 10/12/2019</small></p>
            </div>
        </div>
    </div>
</div>


<!-- METODOLOGIA -->
<div id="metodologia" class="my-5">
    <div class="container text-center">
        <h5>Metodologia</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam placeat dolor debitis dicta sequi eos similique, atque quisquam, praesentium corrupti temporibus ipsa neque. Soluta accusamus perspiciatis saepe animi modi? Magnam.</p>
    </div>
</div>

<div id="leis" class="my-5">
    <div class="container text-center">
        <h5>Leis</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus non, quasi doloremque libero a aperiam facere cum suscipit dolorum, cupiditate officiis animi. Sed, illum aut unde nesciunt nisi nemo.</p>
    </div>
</div>