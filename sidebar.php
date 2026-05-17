<?php
$activePage = $activePage ?? '';
function navClass($page)
{
    global $activePage;
    return $activePage === $page ? 'nav-link active' : 'nav-link text-white';
}
?>

<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-basket-fill fs-2 me-2"></i>
        <span class="fs-4 fw-bold">Sistema da Loja</span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="dashboard.php" class="<?= navClass('dashboard') ?>">
                <i class="bi bi-columns-gap me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="vendas.php" class="<?= navClass('vendas') ?>">
                <i class="bi bi-cart2 me-2"></i>
                Vendas
            </a>
        </li>
        <li>
            <a href="clientes.php" class="<?= navClass('clientes') ?>">
                <i class="bi bi-person-fill me-2"></i>
                Clientes
            </a>
        </li>
        <li>
            <a href="produtos.php" class="<?= navClass('produtos') ?>">
                <i class="bi bi-box-seam-fill me-2"></i>
                Produtos
            </a>
        </li>
        <li>
            <a href="consulta_pontos.php" class="<?= navClass('consulta_pontos') ?>">
                <i class="bi bi-star-fill me-2"></i>
                Consulta de Pontos
            </a>
        </li>
    </ul>

    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle fs-2 rounded-circle me-2"></i>
            <strong>Nome Usuario</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Novo projeto</a></li>
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sair</a></li>
        </ul>
    </div>
</div>
