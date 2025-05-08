
        
        <h5 class="mt-5">Lista de pedidos</h5>
        
        <a href="#" class="btn btn-success btn-sm">Adicionar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Total do Pedido</th>
                    <th class="col-md-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $totalPedidos = 0; ?>
                <?php foreach ($pedidos as $pedido): ?>
                    <?php $totalPedidos += $pedido->totalPedido; ?>
                    
                    <tr>
                        <td><?= $pedido->id; ?></td>
                        <td><?= $pedido->data; ?></td>
                        <td><?= $pedido->nomeCliente; ?></td>
                        <td class="text-end"><?= number_format($pedido->totalPedido, 2, ',', '.'); ?></td>
                        <td class="">
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-danger btn-sm">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4>Total dos pedidos: <?=number_format($totalPedidos, 2, ',', '.')?></h4>

