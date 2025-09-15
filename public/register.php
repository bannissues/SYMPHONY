<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se na Symphony</title>
</head>
<body>
    <main class="container">
        <form action="register.php" method="POST" novalidate>
            <div class="campo">
                <i class="fas fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Usuário" required>
            </div>
            <div class="campo">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Senha" required>
            </div>
            <div class="campo">
                <i class="fas fa-check"></i>
                <input type="confirm-password" id="confirm-password" name="confirm-password" placeholder="Confirme sua senha..." required>
            </div>
            <div class="campo">
                <i class="fas fa-house"></i>
                <input type="number" id="zipcode" name="zipcode" placeholder="CEP" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>

    </main>
</body>
</html>