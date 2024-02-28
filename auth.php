<?php
    if(empty($_POST))
        throw new InvalidArgumentException("Requisição inválida!!!");
    print_r($_POST);
    
    $email = $_POST["user_email"];
    $password = $_POST["user_password"];
    
    // session_start();
    // if ($password != $repassword) {

    //     $_SESSION['msg_login_error'] = 'Lamento, usuário ou senha inválidos!!!';
    //     header('location:user-auth.php');
    // } else {
    //     $_SESSION['msg_login_error'] = '';
    //     header('Location: ' . $_SERVER['HTTP_REFERER']); // Mudar Posteriormente
    //     exit;
    // }
?>