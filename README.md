 Projeto: Sistema de Login e Cadastro

Este é um sistema simples de *login e cadastro de usuários, feito em **PHP com HTML, usando o **XAMPP* como servidor local. O sistema permite registrar novos usuários e fazer login com verificação no banco de dados MySQL.

---

## Funcionalidades

* Cadastro de usuários (nome, e-mail e senha)
* Armazenamento das informações no banco MySQL
* Login com autenticação de e-mail e senha
* Mensagens de confirmação e erro

---

## Requisitos

* [XAMPP](https://www.apachefriends.org/pt_br/index.html) (Apache + MySQL)
* Git (opcional, facilita para clonar o repositório)

---

## Como rodar o projeto

### 1. Instalar XAMPP

* Baixe em: [https://www.apachefriends.org/pt\_br/index.html](https://www.apachefriends.org/pt_br/index.html)
* Instale e abra o painel do XAMPP
* Inicie *Apache* e *MySQL*

---

### 2. Obter os arquivos

Você pode clonar o projeto com:

bash
cd C:/xampp/htdocs
https://github.com/milena390/login-cad.git


ou baixar o ZIP do GitHub e extrair na pasta:

bash
C:/xampp/htdocs/login-cad


---

### 3. Criar o banco de dados

1. Abra http://localhost/phpmyadmin
2. Clique em *Novo*, crie o banco com o nome: login_cad
3. No menu SQL, cole o seguinte:

sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  senha VARCHAR(255) NOT NULL,
  created_at TIMESTAMP
);


---

### 4. Configurar conexão com o banco

O arquivo db_connect.php já vem configurado assim:

php
<?php
$host = 'localhost';        //nome do servidor
$dbname = 'sistema_login';  //nome do banco de dados
$user = 'root';          //usuário
$pass = '&tec77@info!';  //senha
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


> Lembre que o usuário padrão no XAMPP é root, sem senha.

---

## Como usar

### Cadastro

Acesse:


localhost/login/sistema-login-oo/public/


Preencha o formulário e envie.

### Login

Acesse:


localhost/login/sistema-login-oo/public/


Entre com o e-mail e senha que você cadastrou.

---

## Observação sobre segurança

Por padrão, as senhas ficam salvas como texto puro. Para um sistema mais seguro, o ideal seria usar:

php
password_hash()    // na hora de salvar a senha
password_verify()  // na hora de checar o login


---
