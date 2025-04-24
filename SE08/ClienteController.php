<?php
require_once 'Cliente.php';

$clienteController=new ClienteController();
$clienteController->index();


class ClienteController {
    private $clientes;

    public function __construct() {
        $this->clientes = [
            new Cliente(1, 'Antonio Carlos', '999999'),
            new Cliente(2, 'José Antonio', '888888')
        ];
    }

    public function index() {
        $clientes = $this->clientes;
        include '_cabecalho.php';
        include 'listaCliente.php';
        include '_rodape.php';
    }


}
