<!DOCTYPE html>
<html>
<head>
    <title>Login - Autopeças</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);">

<div class="container d-flex justify-content-center align-items-center vh-100">
    
    <div class="card p-4 shadow-lg" style="width: 350px; border-radius: 15px;">
        <h3 class="text-center mb-3"> Login -  Autopeças</h3>

        <form action="../controllers/AuthController.php?acao=login" method="POST">

            <div class="mb-3">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <button class="btn btn-dark w-100">Entrar</button>

        </form>
    </div>

</div>

</body>
</html>