<?php
session_start();

require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../models/UsuarioDAO.php';
require_once __DIR__ .  '/../utils/Sanitizacao.php';

// Sanitiza as entradas
$nomeC = Sanitizacao::sanitizar($_POST['nome_c']);
$email = Sanitizacao::sanitizar($_POST['email']);
$senha = Sanitizacao::sanitizar($_POST['senha']);

$usuario = new Usuario();
$usuario->setNomeC($nomeC);

// Valida o login
$usuarioDAO = new UsuarioDAO();



?>