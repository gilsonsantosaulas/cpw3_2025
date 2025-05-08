<?php

class Pedido {
    public $id;
    public $data;
    public $nomeCliente;
    public $totalPedido;

    public function __construct($id, $data, $nomeCliente, $totalPedido) {
        $this->id = $id;
        $this->data = $data;
        $this->nomeCliente = $nomeCliente;
        $this->totalPedido = $totalPedido;
    }
}

