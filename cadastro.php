<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <nav class="navbar-collapse-celular navbar navbar-expand-lg navbar-light bg-primary">
        <div class="navbar-brand">Escocar</div>
          <div class="navbar-collapse" style="margin-left: 1rem !important; font-size: 1.2rem;">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Inicio <span class="sr-only"></span></a>
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

    <div class="page">
        <div class="card">
            <form>
                <h2>Cadastro</h2>
                <input class="campo" type="text" placeholder="Nome">
                <input class="campo" type="text" placeholder="Sobrenome">
                <input class="campo" type="email" placeholder="E-mail">
                <input class="campo" type="password" placeholder="Senha">
                <input class="campo" type="password" placeholder="Digite novamente sua senha">
                <label>Possui CNH?</label>
                    <select class="campo" name="cnh" id="cnh">
                        <option selected disabled value="">Selecione</option>
                        <option value="no">Não</option>
                        <option value="yes">Sim</option>
                    </select>
                <button class="btn">Concluído</button>
            </form>
        </div>
    </div>

    <style>
      .page {
        background-image: url("image/login.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
</body>
</html>