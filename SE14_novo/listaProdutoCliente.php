<?php 
    $msg = "";
    $classe = "";
    if($compraRealizada=="sim") {
        $msg = "Compra realizada com sucesso.";
        $classe = "alert alert-success";
    } elseif ($compraRealizada=="nao") {
        $msg = "Produto sem estoque.";
        $classe = "alert alert-danger";
    }
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

       <div class="container my-5">
            <a href="?acao=listarProdutosLoja">
                <h1 class="mb-4 text-center">Minha Loja Virtual</h1>
            </a>
        
            <div class="<?= $classe; ?>">
                <?= $msg; ?>
            </div>

            <div class="row g-4">

                <?php foreach ($produtos as $produto): ?>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="<?= $produto->url_imagem; ?>" class="card-img-top" alt="Produto 1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $produto->nome; ?></h5>
                                <p class="card-text"><?= $produto->descricao; ?></p>
                                
                                <!-- Abrir detalhes do produto -->
                                <p><a href="?acao=exibirDetalhesUmProduto&id=<?= $produto->id; ?>">Detalhes</a></p>
                                
                                <p><strong>Marca:</strong> <?= $produto->marca; ?></p>
                                <p><strong>Preço:</strong> R$ <?= number_format($produto->preco, 2, ',', '.'); ?></p>
                               
                                <form action="ProdutoController.php?acao=comprar" method="POST" class="mt-auto">
                                    <input type="hidden" name="id" value="<?= $produto->id; ?>">
                                    <div class="mb-2">
                                        <label class="form-label">Quantidade:</label>
                                        <input type="number" name="quantidade" class="form-control" min="1" value="1">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>

</body>
</html>
