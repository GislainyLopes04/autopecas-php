<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

<div class="container mt-5">

    <h2 class="mb-4"> Painel da Autopeças</h2>

    <div class="d-grid gap-3 col-6">
        <a href="../controllers/ProdutoController.php?acao=listar" class="btn btn-outline-light">
             Listar Produtos
        </a>

        <a href="../controllers/ProdutoController.php?acao=novo" class="btn btn-outline-success">
             Cadastrar Produto
        </a>

        <a href="../controllers/AuthController.php?acao=logout" class="btn btn-outline-danger">
             Sair
        </a>
    </div>

</div>

</body>
</html>