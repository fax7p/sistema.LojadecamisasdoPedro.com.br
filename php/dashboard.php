<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Dashboard</title>

</head>

<body>

    <?php $activePage = 'dashboard'; ?>

    <div class="d-flex">

        <?php include 'sidebar.php'; ?>

        <div class="content">

            <!-- TOPO -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold">Dashboard</h2>
                    <p class="text-muted mb-0">
                        Bem-vindo ao painel administrativo
                    </p>
                </div>

                <button class="btn btn-dark">
                    <i class="bi bi-plus-circle"></i>
                    Novo Cadastro
                </button>
            </div>

            <!-- CARDS -->
            <div class="row g-4 mb-4">

                <div class="col-md-3">
                    <div class="card card-dashboard shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Clientes</h6>
                                <h3 class="fw-bold">120</h3>
                            </div>

                            <i class="bi bi-people-fill text-primary icon-dashboard"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dashboard shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Produtos</h6>
                                <h3 class="fw-bold">58</h3>
                            </div>

                            <i class="bi bi-box-seam text-success icon-dashboard"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dashboard shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Vendas</h6>
                                <h3 class="fw-bold">320</h3>
                            </div>

                            <i class="bi bi-cart-check text-warning icon-dashboard"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-dashboard shadow-sm">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted">Faturamento</h6>
                                <h3 class="fw-bold">R$ 12k</h3>
                            </div>

                            <i class="bi bi-currency-dollar text-danger icon-dashboard"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- TABELA -->
            <div class="table-container shadow-sm">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">Últimos Pedidos</h5>

                    <button class="btn btn-outline-primary btn-sm">
                        Ver Todos
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-hover">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Status</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Matheus</td>
                                <td>Notebook</td>
                                <td>
                                    <span class="badge bg-success">
                                        Pago
                                    </span>
                                </td>
                                <td>R$ 3.200</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>João</td>
                                <td>Mouse Gamer</td>
                                <td>
                                    <span class="badge bg-warning text-dark">
                                        Pendente
                                    </span>
                                </td>
                                <td>R$ 250</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Ana</td>
                                <td>Teclado Mecânico</td>
                                <td>
                                    <span class="badge bg-danger">
                                        Cancelado
                                    </span>
                                </td>
                                <td>R$ 450</td>
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