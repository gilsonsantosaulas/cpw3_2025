<?php
require_once 'Produto.php';
require_once 'db.php';

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
    case 'listarProdutosLoja':
        $produtosController->listarProdutosLoja();
        break;
    case 'comprar':
        $produtosController->comprar();
        break;
    case 'exibirDetalhesUmProduto':
        $produtosController->exibirDetalhesUmProduto();
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
                                    $linha['preco'], 
                                    $linha['quantidade'], 
                                    $linha['descricao'], 
                                    $linha['marca'], 
                                    $linha['url_imagem'],      
                                    $linha['detalhes_produto']);
        }
        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }

    public function novo() {
        $produto = new Produto("", "", "", 0, "", "", "", "");
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
                                $linha['preco'], 
                                $linha['quantidade'], 
                                $linha['descricao'], 
                                $linha['marca'], 
                                $linha['url_imagem'], 
                                $linha['detalhes_produto']);
        
        include '_cabecalho.php';
        include 'formProduto.php';
        include '_rodape.php';
    }

    public function salvar() {
        $pdo = getConnection();
        if ($_POST['id']=="") {
            $stmt = $pdo->prepare("INSERT INTO 
                                produtos (nome, preco, quantidade, descricao, marca, url_imagem, detalhes_produto)    
                                VALUES (:nome, :preco, :quantidade, :descricao, :marca, :url_imagem, :detalhes_produto)");
            $stmt->execute([
                ':nome' => $_POST['nome'],
                ':preco' => $_POST['preco'],
                ':quantidade' => $_POST['quantidade'],
                ':descricao' => $_POST['descricao'],
                ':marca' => $_POST['marca'],
                ':url_imagem' => $_POST['url_imagem'],
                ':detalhes_produto' => $_POST['detalhes_produto']
            ]);
        } else { 
            $stmt = $pdo->prepare("UPDATE produtos SET 
                                    nome = :nome, preco = :preco, 
                                    quantidade = :quantidade, 
                                    descricao = :descricao, 
                                    marca = :marca, url_imagem = :url_imagem,  
                                    detalhes_produto = :detalhes_produto
                                    WHERE id = :id");
            $stmt->execute([
                ':nome' => $_POST['nome'],
                ':preco' => $_POST['preco'],
                ':quantidade' => $_POST['quantidade'],
                ':descricao' => $_POST['descricao'],
                ':marca' => $_POST['marca'],
                ':url_imagem' => $_POST['url_imagem'],
                ':detalhes_produto' => $_POST['detalhes_produto'],
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

    public function listarProdutosLoja() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM produtos");
        $produtos = [];
        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new Produto($linha['id'], 
                                    $linha['nome'], 
                                    $linha['preco'], 
                                    $linha['quantidade'], 
                                    $linha['descricao'], 
                                    $linha['marca'], 
                                    $linha['url_imagem'], 
                                    $linha['detalhes_produto']);
        }
        $compraRealizada = $_GET['compraRealizada'] ?? '';
        include 'listaProdutoCliente.php';
    }

    public function comprar() {
        $pdo = getConnection();
        $compraRealizada = "nao";

        $id = $_POST['id'];
        $quantidadeSolicitada = $_POST['quantidade'];

        $stmt = $pdo->prepare("SELECT quantidade FROM produtos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        $quantidadeEstoque = $linha['quantidade'];
        $novaQuantidade = $quantidadeEstoque - $quantidadeSolicitada;
        if($novaQuantidade >  0) {
            $update = $pdo->prepare("UPDATE produtos SET quantidade = :quantidade WHERE id = :id");
            $update->execute([
                ':quantidade' => $novaQuantidade,
                ':id' => $id
            ]);
            $compraRealizada = "sim";
        }
        header("Location: ?acao=listarProdutosLoja&compraRealizada=".$compraRealizada);
    }

    function exibirDetalhesUmProduto() {
        $pdo = getConnection();
        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        $produto = new Produto($linha['id'], 
                                    $linha['nome'], 
                                    $linha['preco'], 
                                    $linha['quantidade'], 
                                    $linha['descricao'], 
                                    $linha['marca'], 
                                    $linha['url_imagem'], 
                                    $linha['detalhes_produto']);
        include '_cabecalho.php';
        include 'detalhesProdutoCliente.php';
        include '_rodape.php';
    }
}
