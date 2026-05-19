<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/cliente.css">
    <title>Clientes</title>

</head>

<body class="admin-page">

    <body>

        <?php $activePage = 'clientes'; ?>

        <div class="layout-system">

            <?php include 'sidebar.php'; ?>

            <div class="content">

                <!-- TOPO -->
                <div class="page-header">

                    <div>

                        <h1 class="page-title">
                            Clientes
                        </h1>

                        <p class="page-subtitle">
                            Gerenciamento de clientes da loja
                        </p>

                    </div>

                    <button class="btn-client">
                        <i class="bi bi-person-plus-fill"></i>
                        Novo Cliente
                    </button>

                </div>

                <!-- CARDS -->
                <div class="stats-grid">

                    <div class="stat-card">

                        <div>

                            <div class="stat-title">
                                Total de Clientes
                            </div>

                            <div class="stat-number">
                                0
                            </div>

                        </div>

                        <i class="bi bi-people-fill text-primary stat-icon"></i>

                    </div>

                    <div class="stat-card">

                        <div>

                            <div class="stat-title">
                                Novos Cadastros
                            </div>

                            <div class="stat-number">
                                0
                            </div>

                        </div>

                        <i class="bi bi-person-plus-fill text-success stat-icon"></i>

                    </div>

                    <div class="stat-card">

                        <div>

                            <div class="stat-title">
                                Clientes VIP
                            </div>

                            <div class="stat-number">
                                0
                            </div>

                        </div>

                        <i class="bi bi-star-fill text-warning stat-icon"></i>

                    </div>

                    <div class="stat-card">

                        <div>

                            <div class="stat-title">
                                Pontos Distribuídos
                            </div>

                            <div class="stat-number">
                                0
                            </div>

                        </div>

                        <i class="bi bi-trophy-fill text-info stat-icon"></i>

                    </div>

                </div>

                <!-- FILTROS -->
                <div class="filter-box">

                    <div class="filter-grid">

                        <input type="text" placeholder="Digite o nome do cliente">

                        <select>
                            <option>Todos</option>
                            <option>VIP</option>
                            <option>Comum</option>
                        </select>

                        <select>
                            <option>Mais recentes</option>
                            <option>Mais pontos</option>
                        </select>

                        <button class="btn-client">
                            <i class="bi bi-search"></i>
                            Buscar
                        </button>

                    </div>

                </div>

                <!-- TABELA -->
                <div class="table-box">

                    <div class="table-header">

                        <h3>
                            Lista de Clientes
                        </h3>

                        <button class="btn-client">
                            Exportar
                        </button>

                    </div>

                    <table class="client-table">

                        <thead>

                            <tr>

                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Pontos</th>
                                <th>Status</th>
                                <th>Ações</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>#000</td>

                                <td>

                                    <div class="client-info">

                                        <div class="client-avatar"></div>

                                        <strong>
                                            Nome Cliente
                                        </strong>

                                    </div>

                                </td>

                                <td>
                                    cliente@email.com
                                </td>

                                <td>
                                    (00) 00000-0000
                                </td>

                                <td>

                                    <span class="badge-points">
                                        0 pontos
                                    </span>

                                </td>

                                <td>

                                    <span class="badge-active">
                                        Ativo
                                    </span>

                                </td>

                                <td>

                                    <div class="action-buttons">

                                        <button class="btn-action btn-edit">
                                            <i class="bi bi-pencil-fill"></i>
                                        </button>

                                        <button class="btn-action btn-delete">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>