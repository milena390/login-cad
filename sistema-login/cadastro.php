<?php
require_once 'processacad.php';

$auth = new processacad("localhost", "root", "&tec77@info!", "sistema_login");

$nome  = $auth->sanitizar($_POST['nome'] ?? '');
$email = $auth->sanitizar($_POST['email'] ?? '');
$senha = $auth->sanitizar($_POST['senha'] ?? '');

if (!$auth->validarEmail($email)) {
    echo "E-mail inválido.";
    exit;
}

if (strlen($senha) < 6) {
    echo "A senha deve ter pelo menos 6 caracteres.";
    exit;
}

echo $auth->cadastrar($nome, $email, $senha);
?>
