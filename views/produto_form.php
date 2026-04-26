<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Peça</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">
        <h3 class="mb-4">
            <?= isset($produto) ? ' Editar Peça' : ' Nova Peça' ?>
        </h3>

        <form action="../controllers/ProdutoController.php?acao=salvar" method="POST">

            <input type="hidden" name="id" value="<?= $produto['id'] ?? '' ?>">

            <div class="mb-3">
                <label class="form-label">Código da Peça</label>
                <input type="text" name="codigo_peca" class="form-control"
                    value="<?= $produto['codigo_peca'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control"
                    value="<?= $produto['nome'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control"><?= $produto['descricao'] ?? '' ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control"
                    value="<?= $produto['preco'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade em Estoque</label>
                <input type="number" name="quantidade_estoque" class="form-control"
                    value="<?= $produto['quantidade_estoque'] ?? '' ?>" required>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../controllers/ProdutoController.php?acao=listar" class="btn btn-secondary">Cancelar</a>
            </div>

        </form>
    </div>

</div>

</body>
</html>