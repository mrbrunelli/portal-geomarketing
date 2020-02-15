<?php
include '../../includes/header.php';
?>


<header class="sticky-top shadow mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand logo">Geo Marketing <small>pesquisas</small></a>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-search"></i> Pesquisas</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-book-open"></i> Metodologia</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fas fa-chart-area"></i> IBGE</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="" class="nav-link dropdown-toggle" id="dropdownuser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i> Admin
                            </a>
                            <div class="dropdown-menu text-center shadow" aria-labelledby="dropdownuser">
                                <a href="" class="dropdown-item"><i class="fas fa-user-cog"></i> - Usuário</a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sair</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<!-- KPI DE PESQUISAS -->
<div id="contador" class="my-5">
    <div class="text-center py-5">
        <div class="row justify-content-around">
            <div class="col-md-3 shadow p-4 rounded">
                <h5>Total de pesquisas</h5>
                <h2 class="text-muted">4567</h2>
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




<!-- RODAPÉ -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-12 text-center mb-4">
                <h2>Portal Geomarketing</h2>
                <p class="text-muted">Todas as pesquisas em um único lugar</p>
            </div>

            <div class="col-md-4 text-center">
                <h5>Sobre</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. In exercitationem eveniet possimus</p>
            </div>

            <div class="col-md-4 text-center">
                <h5>Links</h5>
                <p>
                    <a href="" class="text-muted">Pesquisas por estado</a><br>
                    <a href="" class="text-muted">Pesquisas por cidade</a><br>
                    <a href="" class="text-muted">Pesquisas por renda</a><br>
                </p>
            </div>

            <div class="col-md-4 text-center">
                <h5>Desenvolvido por</h5>
                <p>
                    <a href="https://github.com/mrbrunelli" target="_blank" class="text-muted">Matheus Ricardo Brunelli</a><br>
                    <a href="https://github.com/mazinevinicius" target="_blank" class="text-muted">Vinicius Marques Mazine</a>
                </p>
            </div>

        </div>
    </div>
</footer>


<?php
include '../../includes/footer.php';
?>