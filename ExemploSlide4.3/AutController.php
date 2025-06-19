<?php
session_start();
require_once 'db.php';


$autController=new AutController();

$acao = $_GET['acao'] ?? '';
switch ($acao) {
    case 'loginForm':
        $autController->loginForm();
        break;
   case 'login':
        $autController->login();
        break;
    case 'logout':
        $autController->logout();
        break;
}   

class AutController {

    public function loginForm() {
        include '_cabecalho.php';
        include 'formLogin.php';
        include '_rodape.php';
    }

    public function login() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM usuarios 
                                WHERE usuario = :usuario
                                and senha = :senha");
        $stmt->execute([':usuario' => $_POST['usuario'], 
                        ':senha' => $_POST['senha']]);
        $usuarioDb = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($usuarioDb) {
            $_SESSION['usuario'] = $usuarioDb['usuario'];
            $_SESSION['nome'] = $usuarioDb['nome'];
            header("Location: ProdutoController.php");
            exit;
        } else {
            include '_cabecalho.php';
            include 'formLogin.php';
            include '_rodape.php';
        }
    }

    public function logout() {
        session_destroy();
        header("Location: AutController.php?acao=loginForm");
        exit;
    }

    public function verificarAutenticacao() {
        if (!isset($_SESSION['usuario'])) {
            header("Location: AutController.php?acao=loginForm");
            exit;
        }
    }

    public function getUsuarioLogado() {
        if (isset($_SESSION['usuario'])) {
            return $_SESSION['usuario'];
        } else {
            return null;
        }
    }
}
