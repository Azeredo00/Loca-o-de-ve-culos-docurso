<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/auth-user.css">
    <title>ESCOCAR - Aluguel de carros online !!!</title>
</head>

<body>
  <header>
      <nav class="navbar-collapse-celular navbar navbar-expand-lg navbar-light bg-primary">
        <div class="navbar-brand">Escocar</div>
          <div class="navbar-collapse" style="margin-left: 1rem !important; font-size: 1.2rem;">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aluguel.php">Aluguel <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="assinatura.php">Assinatura <span class="sr-only"></span></a>
              </li>
            </ul>
          </div>

          <a href="http://127.0.0.1/site/user-auth.php" style="text-decoration: none;"><div class="user-icon user-i" onclick="redirecionar()"><span class="material-symbols-outlined">
            person
          </span></div></a>
        </nav>
  </header>
    <form action="auth.php" method="post" class="row g-3 align-items-center form-login">     
      <div class="col-12">
        <div class="container">
          <div class="card" style="box-shadow: 5px 5px 10px 0px rgba(0,0,0,0.5);">
            <div class="container-lg">
                <input class="input-lg form-control email user_email" name="user_email" type="email" placeholder="Email" required>
                <input class="input-lg senha form-control user_password" name="user_password" type="password" placeholder="Nova senha" required minlength="8">
                
                <div style="align-self: center; margin-top: 2ch;">
                    <button type="submit" class="btn-sm btn-sub-s btn btn-primary">Login</button>
                </div>

                <p>Não tem uma conta ?<a href="/site/cadastro.php"> Click Aqui</a></p>
                
            </div>
          </div>
        </div>
    </form>

    <?php
      session_start();
      if (!empty($_SESSION['msg_login_error'])) :
    ?>

    <p class="error_msg" style="display: none;"><?= $_SESSION['msg_login_error'];?></p>

    <?php
        unset($_SESSION['msg_login_error']);
        endif;
    ?>
  <footer>
        <div class="container-ft">
          
        </div>
  </footer>

  <style>
    body {
        background-image: url("image/login.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    p {
        align-self: center;
        margin-top: 5vh;
    }
  </style>

  <script src="auth_error.js"></script>
</body>
</php>