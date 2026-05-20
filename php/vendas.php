<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Vendas</title>

</head>

<body>

    <?php $activePage = 'vendas'; ?>

    <div class="d-flex">

        <?php include 'sidebar.php'; ?>

        <div class="content">

            <!-- TOPO -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h2 class="fw-bold">Painel de Vendas</h2>
                    <p class="text-muted mb-0">
                        Controle geral da loja de camisetas
                    </p>
                </div>

                <button class="btn btn-dark">
                    <i class="bi bi-plus-circle"></i>
                    Nova Venda
                </button>

            </div>

            <!-- CARDS -->
            <div class="row g-4 mb-4">

                <!-- VENDAS DO DIA -->
                <div class="col-md-3">
                    <div class="card card-vendas shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">

                            <div>
                                <h6 class="text-muted">Vendas do Dia</h6>

                                <!-- PHP FUTURO -->
                                <h3 class="fw-bold">
                                    <?php echo $vendasDia ?? 28; ?>
                                </h3>

                                <small class="text-success">
                                    +12% hoje
                                </small>
                            </div>

                            <i class="bi bi-cart-check-fill text-success icon-card"></i>

                        </div>
                    </div>
                </div>

                <!-- FATURAMENTO -->
                <div class="col-md-3">
                    <div class="card card-vendas shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">

                            <div>
                                <h6 class="text-muted">Faturamento</h6>

                                <h3 class="fw-bold">
                                    R$ <?php echo $faturamento ?? '3.450'; ?>
                                </h3>

                                <small class="text-primary">
                                    Hoje
                                </small>
                            </div>

                            <i class="bi bi-currency-dollar text-primary icon-card"></i>

                        </div>
                    </div>
                </div>

                <!-- PRODUTO MAIS VENDIDO -->
                <div class="col-md-3">
                    <div class="card card-vendas shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">

                            <div>
                                <h6 class="text-muted">Mais Vendido</h6>

                                <h5 class="fw-bold">
                                    Camiseta Oversized
                                </h5>

                                <small class="text-muted">
                                    152 vendas
                                </small>
                            </div>

                            <i class="bi bi-star-fill text-warning icon-card"></i>

                        </div>
                    </div>
                </div>

                <!-- PRODUTO MAIS PROCURADO -->
                <div class="col-md-3">
                    <div class="card card-vendas shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">

                            <div>
                                <h6 class="text-muted">Mais Procurado</h6>

                                <h5 class="fw-bold">
                                    Camiseta Anime
                                </h5>

                                <small class="text-danger">
                                    Alto interesse
                                </small>
                            </div>

                            <i class="bi bi-search-heart-fill text-danger icon-card"></i>

                        </div>
                    </div>
                </div>

            </div>

            <!-- SEGUNDA LINHA -->
            <div class="row g-4 mb-4">

                <!-- CLIENTE COM MAIS COMPRAS -->
                <div class="col-md-4">
                    <div class="card card-vendas shadow-sm h-100">
                        <div class="card-body">

                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-person-circle fs-1 text-dark me-3"></i>

                                <div>
                                    <h5 class="fw-bold mb-0">
                                        Matheus Fernandes
                                    </h5>

                                    <small class="text-muted">
                                        Cliente VIP
                                    </small>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Total de Compras</span>
                                <strong>38</strong>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <span>Total Gasto</span>
                                <strong>R$ 7.850</strong>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span>Pontos</span>
                                <strong class="text-info">2.450</strong>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ESTOQUE -->
                <div class="col-md-4">
                    <div class="card card-vendas shadow-sm h-100">
                        <div class="card-body">

                            <h5 class="fw-bold mb-4">
                                Estoque Atual
                            </h5>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Camisetas Pretas</span>
                                    <strong>85</strong>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Camisetas Brancas</span>
                                    <strong>50</strong>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <span>Oversized</span>
                                    <strong>25</strong>
                                </div>

                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 25%"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- RESUMO -->
                <div class="col-md-4">
                    <div class="card card-vendas shadow-sm h-100">
                        <div class="card-body">

                            <h5 class="fw-bold mb-4">
                                Resumo do Mês
                            </h5>

                            <div class="d-flex justify-content-between mb-3">
                                <span>Total de Pedidos</span>
                                <strong>420</strong>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <span>Novos Clientes</span>
                                <strong>58</strong>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <span>Produtos Vendidos</span>
                                <strong>680</strong>
                            </div>

                            <div class="d-flex justify-content-between">
                                <span>Lucro</span>
                                <strong class="text-success">
                                    R$ 18.400
                                </strong>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- TABELA -->
            <div class="table-container shadow-sm">

                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h5 class="fw-bold mb-0">
                        Últimas Vendas
                    </h5>

                    <button class="btn btn-dark btn-sm">
                        Ver Tudo
                    </button>

                </div>

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Tamanho</th>
                                <th>Status</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>001</td>
                                <td>Lucas</td>
                                <td>Camiseta Oversized</td>
                                <td>G</td>
                                <td>
                                    <span class="badge bg-success">
                                        Pago
                                    </span>
                                </td>
                                <td>R$ 89,90</td>
                            </tr>

                            <tr>
                                <td>002</td>
                                <td>Amanda</td>
                                <td>Camiseta Anime</td>
                                <td>M</td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        Pendente
                                    </span>
                                </td>
                                <td>R$ 79,90</td>
                            </tr>

                            <tr>
                                <td>003</td>
                                <td>João</td>
                                <td>Camiseta Streetwear</td>
                                <td>GG</td>
                                <td>
                                    <span class="badge bg-danger">
                                        Cancelado
                                    </span>
                                </td>
                                <td>R$ 99,90</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>