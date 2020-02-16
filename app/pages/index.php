<?php

session_start();
if (!isset($_SESSION['UsuarioID'])) {
    header('location: ../../index.php');
}

include '../../includes/header.php';
?>

<header class="sticky-top shadow mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand logo">Geo Marketing <small>pesquisas</small></a>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php?pagina=pesquisas" class="nav-link"><i class="fas fa-search"></i> Pesquisas</a>
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
                                <a href="" class="dropdown-item"><i class="fas fa-user-cog"></i> - <?= $_SESSION['UsuarioNome'] ?></a>
                                <div class="dropdown-divider"></div>
                                <!-- Destroi a sessão e redireciona para o login -->
                                <a href="../../backend/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sair</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



<?php

if ($_SESSION['UsuarioTipo'] == 'A') {
    isset($_GET['pagina']) ? $pagina = trim($_GET['pagina']) : $pagina = 'home';
} else {
    isset($_GET['pagina']) ? $pagina = trim($_GET['pagina']) : $pagina = 'erro';
}

$pagina = $pagina . ".php";
if (file_exists($pagina)) {
    include $pagina;
} else {
    include 'erro.php';
}

?>



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
