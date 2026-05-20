<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Página Principal</title>

</head>
<body>

    <div class="d-flex">

        <!-- SIDEBAR -->
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white">

            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">

                <i class="bi bi-basket-fill fs-2 me-2"></i>

                <span class="fs-4 fw-bold">
                    Sistema da Loja
                </span>

            </a>

            <hr>

            <ul class="nav nav-pills flex-column mb-auto">

                <li class="nav-item">

                    <a href="dashboard.php" class="nav-link active">

                        <i class="bi bi-columns-gap me-2"></i>

                        Dashboard

                    </a>

                </li>

                <li>

                    <a href="vendas.php" class="nav-link text-white">

                        <i class="bi bi-cart2 me-2"></i>

                        Vendas

                    </a>

                </li>

                <li>

                    <a href="clientes.php" class="nav-link text-white">

                        <i class="bi bi-person-fill me-2"></i>

                        Clientes

                    </a>

                </li>

                <li>

                    <a href="produtos.php" class="nav-link text-white">

                        <i class="bi bi-box-seam-fill me-2"></i>

                        Produtos

                    </a>

                </li>

                <li>

                    <a href="consulta_pontos.php" class="nav-link text-white">

                        <i class="bi bi-star-fill me-2"></i>

                        Consulta de Pontos

                    </a>

                </li>

            </ul>

            <hr>

            <!-- PERFIL -->
            <div class="dropdown">

                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown">

                    <i class="bi bi-person-circle fs-2 rounded-circle me-2"></i>
                    <strong>Nome Usuario</strong>

                </a>

                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
        
                    <li>
                        <a class="dropdown-item" href="#">
                            Configurações
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            Perfil
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            Sair
                        </a>
                    </li>

                </ul>

            </div>

        </div>

        <!-- CONTEÚDO -->
        <div class="content">


        </div>
        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>