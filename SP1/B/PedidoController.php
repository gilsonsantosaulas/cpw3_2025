<?php
require_once 'Pedido.php';

$pedidoController=new PedidoController();
$pedidoController->index();


class PedidoController {
    private $pedidos;

    public function __construct() {
        $this->pedidos = [
            new Pedido(1, '01/05/2025', 'Antonio Cesar', 50),
            new Pedido(2, '01/05/2025', 'Maria dos Santos', 100),
            new Pedido(3, '01/05/2025', 'Igor Santos', 700),
            new Pedido(4, '01/05/2025', 'Francisco Xavier', 3500),
            new Pedido(5, '01/05/2025', 'Estela Santos', 30)
        ];
    }

    public function index() {
        $pedidos = $this->pedidos;
        include '_cabecalho.php';
        include 'listaPedido.php';
        include '_rodape.php';
    }


}
