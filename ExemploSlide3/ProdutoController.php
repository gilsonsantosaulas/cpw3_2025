<?php
require_once 'Produto.php';

$produtosController=new ProdutoController();
$produtosController->index();


class ProdutoController {
    private $produtos;

    public function __construct() {
        $this->produtos = [
            new Produto(1, 'Mouse', 50),
            new Produto(2, 'Teclado', 100),
            new Produto(3, 'Monitor', 700),
            new Produto(4, 'Notebook', 3500),
            new Produto(5, 'Cabo HDMI', 30),
            new Produto(6, 'Pen Drive', 40),
            new Produto(7, 'HD Externo', 300),
            new Produto(8, 'Webcam', 150),
            new Produto(9, 'Fone de Ouvido', 80),
            new Produto(10, 'Caixa de Som', 120),
        ];
    }

    public function index() {
        $produtos = $this->produtos;
        include '_cabecalho.php';
        include 'listaProduto.php';
        include '_rodape.php';
    }


}
