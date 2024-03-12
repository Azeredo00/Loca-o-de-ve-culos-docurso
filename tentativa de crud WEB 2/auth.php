<?php
if (empty($_POST))
    throw new InvalidArgumentException("Requisição inválida!!!");

$email = $_POST['user_email'];
$password = $_POST['user_password'];

session_start();
accessVerify(email: $email, password: $password);

function accessVerify(string $password, string $email): void
{
    $db = [
        [
            'name' => 'João Paulo',
            'email' => 'joao.paulo@email.com.br',
            'password' => '$2y$10$en/56G8BANT2AzXX29eee.WS46yfzBxIMlTPgmIMqLcBEcZcdq8pO',
            'gender' => 'M'
        ],
        [
            'name' => 'Maria Aparecida',
            'email' => 'maria.paulo@email.com',
            'password' => '$2y$10$x/fRf9UQ79STLLCJGLxkPOVI7sfPtdGtSBjqXox2RFwxr11RQtTu6',
            'gender' => 'F'
        ]
    ];

    foreach ($db as $register) {
        if (
            $email == $register['email']
            && password_verify($password, $register['password'])
        ) {
            $_SESSION['user_name'] = $register['name'];
            $_SESSION['user_gender'] = $register['gender'];
            header('location:dashboard.html'); // Redirect
            exit;
        }
    }
    $_SESSION['msg_login_error'] = 'Lamento, usuário ou senha inválidos!!!';
    header('location:index.php');
}
