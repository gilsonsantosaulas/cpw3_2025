<?php

class Produto {
    public $id;
    public $nome;
    public $preco;
    public $quantidade;
    public $descricao;
    public $marca;
    public $url_imagem;

    public function __construct($id, $nome, $preco, $quantidade, $descricao, $marca, $url_imagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->descricao = $descricao;
        $this->marca = $marca;
        $this->url_imagem = $url_imagem;
        
    }
}

