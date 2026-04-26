<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4"> Peças em Estoque</h2>

    <a href="../controllers/ProdutoController.php?acao=dashboard" class="btn btn-secondary mb-3">
        ← Voltar
    </a>

    <table class="table table-hover table-bordered shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>

        <body>
        <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['codigo_peca'] ?></td>
                <td><?= $p['nome'] ?></td>
                <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                <td><?= $p['quantidade_estoque'] ?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="../controllers/ProdutoController.php?acao=editar&id=<?= $p['id'] ?>">Editar</a>
                    <a class="btn btn-sm btn-danger" href="../controllers/ProdutoController.php?acao=excluir&id=<?= $p['id'] ?>" onclick="return confirm('Tem certeza?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </body>
    </table>

</div>

</body>
</html>