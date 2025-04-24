
        
        <h5 class="mt-5">Lista de Clientes</h5>
        
        <a href="#" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente->id; ?></td>
                        <td><?= $cliente->nome; ?></td>
                        <td><?= $cliente->celular; ?></td>
                        <td class="">
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

