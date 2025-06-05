
        
        <h5 class="mt-5">Lista de Produtos</h5>
        
        
        <div class="row">
            <div class="col-md-8">
                
            </div>
            <div class="col-md-4">
                <form method="post" action="ProdutoController.php?acao=pesquisar" 
                        class="d-flex justify-content-end">
                    <input 
                        class="form-control form-control-sm me-2" 
                        type="text" 
                        name="pesquisar_termos" 
                        placeholder="Pesquisar..." 
                        value="<?= $_POST['pesquisar_termos'] ?? '' ?>">
                    <button type="submit" 
                            class="btn btn-sm btn-outline-primary">
                                Pesquisar
                    </button>
                </form>
            </div>
        </div>



        
        <a href="ProdutoController.php?acao=novo" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->id; ?></td>
                        <td><?= $produto->nome; ?></td>
                        <td class="text-end"><?= number_format($produto->preco, 2, ',', '.'); ?></td>
                        <td>
                            <a href="?acao=editar&id=<?= $produto->id ?>" 
                                class="btn btn-primary btn-sm">
                                    Editar
                            </a>
                            <a href="?acao=excluir&id=<?= $produto->id ?>" 
                                class="btn btn-danger btn-sm">
                                    Remover
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

