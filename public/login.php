<!DOCTYPE html>
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

        <form action="process_login.php" method="POST">
            <div class="campo">
                <i class="fas fa-user"></i>
                <input type="text" id="username" name="username" placeholder="Usuário" required><br><br>
            </div>
            <div class="campo">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Senha" required><br><br>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <a href="#página de cadastro">Cadastre-se</a>

    </main>
</body>

</html>