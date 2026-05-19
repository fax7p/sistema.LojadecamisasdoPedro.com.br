<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/produtos.css">
    <title>Produtos</title>

</head>

<body>

    <?php $activePage = 'produtos'; ?>

    <div class="layout-system">

        <?php include 'sidebar.php'; ?>

        <div class="content">

            <!-- TOPO -->
            <div class="page-header">

                <div>

                    <h1 class="page-title">
                        Catálogo de Camisas
                    </h1>

                    <p class="page-subtitle">
                        Gerencie os produtos da loja
                    </p>

                </div>

                <button class="btn-product">
                    <i class="bi bi-plus-lg"></i>
                    Nova Camisa
                </button>

            </div>

            <!-- FILTROS -->
            <div class="filter-box">

                <div class="filter-grid">

                    <input
                        type="text"
                        placeholder="Buscar camisa...">

                    <select>
                        <option>Todas Categorias</option>
                        <option>Oversized</option>
                        <option>Anime</option>
                        <option>Streetwear</option>
                    </select>

                    <select>
                        <option>Mais recentes</option>
                        <option>Mais vendidas</option>
                        <option>Maior preço</option>
                    </select>

                    <button class="btn-product">
                        <i class="bi bi-search"></i>
                        Buscar
                    </button>

                </div>

            </div>

            <!-- CATÁLOGO -->
            <div class="products-grid">

                <!-- PRODUTO -->
                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="https://placehold.co/300x300/png"
                            alt="Camisa">

                    </div>

                    <div class="product-info">

                        <h3 class="product-title">
                            Camisa Oversized
                        </h3>

                        <p class="product-category">
                            Streetwear
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                R$ 89,90
                            </span>

                            <div class="product-actions">

                                <button class="btn-icon edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>

                                <button class="btn-icon delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- PRODUTO -->
                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="https://placehold.co/300x300/png"
                            alt="Camisa">

                    </div>

                    <div class="product-info">

                        <h3 class="product-title">
                            Camisa Anime
                        </h3>

                        <p class="product-category">
                            Anime
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                R$ 79,90
                            </span>

                            <div class="product-actions">

                                <button class="btn-icon edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>

                                <button class="btn-icon delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- PRODUTO -->
                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="https://placehold.co/300x300/png"
                            alt="Camisa">

                    </div>

                    <div class="product-info">

                        <h3 class="product-title">
                            Camisa Minimalista
                        </h3>

                        <p class="product-category">
                            Casual
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                R$ 69,90
                            </span>

                            <div class="product-actions">

                                <button class="btn-icon edit">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>

                                <button class="btn-icon delete">
                                    <i class="bi bi-trash-fill"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>