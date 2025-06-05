
        
        <h5 class="mt-5">Lista de Produtos</h5>

        <a href="ProdutoController.php?acao=novo" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->id; ?></td>
                        <td><?= $produto->nome; ?></td>
                        <td class="text-end"><?= number_format($produto->preco, 2, ',', '.'); ?></td>
                        <td class="text-center"><?= $produto->quantidade; ?></td>
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

