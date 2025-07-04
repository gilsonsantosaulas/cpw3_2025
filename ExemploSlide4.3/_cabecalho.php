<?php 
require_once 'AutController.php';
$autController = new AutController();
$usuarioLogado = $autController->getUsuarioLogado();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sistema de Vendas</title>
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Sistema de Vendas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                        </li>
                        <?php if($usuarioLogado) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="ProdutoController.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ClienteController.php">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="VendedorController.php">Vendedores</a>
                            </li>
                        <?php endif; ?>

                    </ul>
                    <?php if($usuarioLogado) : ?>
                    
                        Usuário: <?= $usuarioLogado ?> <a href="AutController.php?acao=logout">(Sair)</a>

                    <?php endif; ?>
                </div>
            </div>
        </nav>