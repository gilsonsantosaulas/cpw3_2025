<?php
require_once 'Produto.php';
require_once 'AutController.php';
require_once 'db.php';

$autConntroller = new AutController();
$autConntroller->verificarAutenticacao();

$produtosController=new ProdutoController();

$acao = $_GET['acao'] ?? 'index';
switch ($acao) {
    case 'novo':
        $produtosController->novo();
        break;
    case 'editar':
        $produtosController->editar();
        break;
    case 'salvar':
        $produtosController->salvar();
        break;
    case 'excluir':
        $produtosController->excluir();
        break;
    case 'pesquisar':
        $produtosController->pesquisar();
        break;
    default:
        $produtosController->index();
}


class ProdutoController {

    public function index() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM produtos");
        $produtos = [];
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new Produto($linha['id'], 
                                    $linha['nome'], 
                                    $linha['preco']);
        }
        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }

    public function novo() {
        $produto = new Produto("", "", "");
        include '_cabecalho.php';
        include 'formProduto.php';
        include '_rodape.php';
    }

    public function editar() {
        $id = $_GET['id'];
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        $produto = new Produto($linha['id'], 
                                $linha['nome'], 
                                $linha['preco']);
        
        include '_cabecalho.php';
        include 'formProduto.php';
        include '_rodape.php';
    }

    public function salvar() {
        $pdo = getConnection();
        if ($_POST['id']=="") {
            $stmt = $pdo->prepare("INSERT INTO 
                                produtos (nome, preco) 
                                VALUES (:nome, :preco)");
            $stmt->execute([
                ':nome' => $_POST['nome'],
                ':preco' => $_POST['preco']
            ]);
        } else { 
            $stmt = $pdo->prepare("UPDATE produtos SET 
                                    nome = :nome, preco = :preco 
                                    WHERE id = :id");
            $stmt->execute([
                ':nome' => $_POST['nome'],
                ':preco' => $_POST['preco'],
                ':id' => $_POST['id']
            ]);            
        }
        header("Location: ?acao=index");
        exit;
    }   
    
    public function excluir() {
        $id = $_GET['id'];
        $pdo = getConnection();
        $stmt = $pdo->prepare("DELETE FROM 
                                produtos 
                                WHERE id = :id");
        $stmt->execute([':id' => $id]);
        header("Location: ?acao=index");
        exit;
    }

    public function pesquisar() {
        $pesquisar_termos = $_POST['pesquisar_termos'] ?? '';
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE nome LIKE :pesquisar_termos");
        $stmt->execute([':pesquisar_termos' => '%' . $pesquisar_termos . '%']);
        $produtos = [];

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new Produto($linha['id'], $linha['nome'], $linha['preco']);
        }

        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }


}
