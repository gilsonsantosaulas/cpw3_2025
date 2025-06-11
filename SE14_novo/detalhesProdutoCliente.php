<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Detalhes do Produto</title>
</head>

<body>

    <div class="container my-5">
        <a href="?acao=listarProdutosLoja" class="btn btn-secondary mb-4">← Voltar aos produtos</a>

        <h1 class="mb-4 text-center">Detalhes do Produto</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?= $produto->url_imagem; ?>" class="card-img-top" alt="<?= $produto->nome; ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?= $produto->nome; ?></h3>
                        <p class="card-text"><?= $produto->descricao; ?></p>
                        <p><strong>Marca:</strong> <?= $produto->marca; ?></p>
                        <p class="card-text"><strong>Detalhes do Produto:</strong><?= $produto->detalhes_produto; ?></p>
                        <p><strong>Preço:</strong> R$ <?= number_format($produto->preco, 2, ',', '.'); ?></p>

                        <form action="ProdutoController.php?acao=comprar" method="POST" class="mt-4">
                            <input type="hidden" name="id" value="<?= $produto->id; ?>">
                            <div class="mb-3">
                                <label class="form-label">Quantidade:</label>
                                <input type="number" name="quantidade" class="form-control" min="1" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
