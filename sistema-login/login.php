<?php
require_once 'Auth.php';

$auth = new Auth("localhost", "root", "&tec77@info!", "sistema_login");

$email = $auth->sanitizar($_POST['email'] ?? '');
$senha = $auth->sanitizar($_POST['senha'] ?? '');

if (!$auth->validarEmail($email)) {
    echo "E-mail inválido.";
    exit;
}

if ($auth->login($email, $senha)) {
    session_start();
    $_SESSION['logado'] = true;
    echo "Login realizado com sucesso!";
    // header("Location: painel.php"); // redirecionar se quiser
} else {
    echo "Email ou senha incorretos.";
}
?>
