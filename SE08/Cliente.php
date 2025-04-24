<?php

class Cliente {
    public $id;
    public $nome;
    public $celular;

    public function __construct($id, $nome, $celular) {
        $this->id = $id;
        $this->nome = $nome;
        $this->celular = $celular;
    }
}

