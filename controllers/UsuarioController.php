<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    public function cadastrarUsuario($nome_completo, $email, $senha) {
        $db = new Database();
        $conn = $db->getConnection();  // <---- Alterado aqui

        $usuario = new Usuario($conn);

        if ($usuario->emailExiste($email)) {
            echo "<p class='message error'>E-mail já cadastrado.</p>";
            return;
        }

        if ($usuario->cadastrar($nome_completo, $email, $senha)) {
            echo "<p class='message success'>Cadastro realizado com sucesso, <strong>" . htmlspecialchars($nome_completo) . "</strong>!</p>";
        } else {
            echo "<p class='message error'>Erro ao cadastrar usuário.</p>";
        }
    }
}
