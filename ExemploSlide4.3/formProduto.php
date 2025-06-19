<?php var_dump($erro); ?>
        
        <?php if ($erro) : ?>
            <div class="alert alert-danger">
                <?= $erro ?>
            </div>
        <?php endif; ?>

        <div class="card mt-5">
            <div class="card-header">
                <h5 ><?= $produto->id=="" ? "Novo Produto" : "Editar Produto" ?></h5>
            </div>
            <div class="card-body">
                <form method="post" action="ProdutoController.php?acao=salvar">
                    <input type="hidden" name="id" value="<?= $produto->id ?>" >
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" 
                                                name="nome" 
                                                value="<?= $produto->nome ?>" 
                                                required autofocus>
                    <label>Preço:</label>
                    <input class="form-control" type="number" 
                                                name="preco" 
                                                step="0.01"
                                                 value="<?= $produto->preco ?>" 
                                                 required>
                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </form> 
            </div>
        </div>

        