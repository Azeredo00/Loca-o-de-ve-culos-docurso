<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="all">
        <div class="header">
            <div>
                <a href="https://www.roblox.com/games/9865958871/BIG-Paintball-2#!/game-instances">
                Ver Veículos disponiveis
                </a>
            </div>
            <div>
                <a
                    href="https://www.roblox.com/games/9865958871/BIG-Paintball-2#!/game-instances">
                    Minha conta
                </a>
            </div>
        </div>
        <div class="logincontent">
            <form class="login" action="auth.php" method="post">
                <label for="user_email">Email:
                    <input type="email" name="user_email" id="user_email" required>
                </label>
                <label for="user_password">Senha:
                    <input type="password" name="user_password" id="user_password" required minlength="8">
                </label>
                <button type="submit">
                    Entrar
                </button>
            </form>            
            <?php
            session_start();
            if (!empty($_SESSION['msg_login_error'])) :
            ?>
                <p><?= $_SESSION['msg_login_error'] ?></p>
            <?php
                unset($_SESSION['msg_login_error']);
            endif;
            ?>
        </div>
    </div>
</body>
</html>