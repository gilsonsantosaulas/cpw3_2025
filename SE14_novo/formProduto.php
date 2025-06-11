
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
                    <label>Quantidade:</label>
                    <input class="form-control" type="number" 
                                                name="quantidade" 
                                                step="1"
                                                 value="<?= $produto->quantidade ?>" 
                                                 required>
                    <label>Descrição:</label>
                    <textarea class="form-control" type="text" 
                                                name="descricao" 
                                                 value="<?= $produto->descricao ?>" 
                                                 required></textarea>
                    <label>Detalhes:</label>
                    <textarea class="form-control" type="text" 
                                                name="descricao_produto" 
                                                 value="<?= $produto->detalhes_produto ?>" 
                                                 required></textarea>
                    <label>Marca:</label>
                    <input class="form-control" type="text" 
                                                name="marca" 
                                                 value="<?= $produto->marca ?>" 
                                                 required>
                    <label>Imagem:</label>
                    <input class="form-control" type="text" 
                                                name="url_imagem" 
                                                 value="<?= $produto->url_imagem ?>" 
                                                 required>
                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </form> 
            </div>
        </div>

        