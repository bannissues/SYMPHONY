<?php
// Inicia a sessão para poder acessar as variáveis de sessão
session_start();
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYMPHONY</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Astloch:wght@400;700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <main class="container">
        <div class="login-gif"><img src="./../media/pinkwaves.gif" alt=""></div>
        <div class="container_title">
            <h1>Entre na</h1>
            <h1><span>S</span>ymphony</h1>
        </div>

        <?php
        // verifica se existe uma mensagem de erro na sessão
        if (isset($_SESSION['login_error'])) {
            // exibe a mensagem de erro
            echo '<p class="error-message">' . htmlspecialchars($_SESSION['login_error']) . '</p>';
            // remove a mensagem da sessão para não ser exibida novamente
            unset($_SESSION['login_error']);
        }
        ?>
        <form action="../auth/process_login.php" method="POST" novalidate>
            <div class="campo">
                <i class="fas fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Usuário" required>
            </div>
            <div class="campo">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <a href="register.php">Cadastre-se</a>

    </main>
</body>

</html>