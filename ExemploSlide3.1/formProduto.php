
        <div class="card mt-5">
            <div class="card-header">
                <h5 >Cadastrar Produto</h5>
            </div>
            <div class="card-body">
                <form method="post" action="ProdutoController.php?acao=salvar">
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" name="nome" required autofocus>

                    <label>Preço:</label>
                    <input class="form-control" type="number" name="preco" step="0.01" required>

                    <button class="btn btn-primary mt-3" type="submit">Salvar</button>
                </form>
            </div>
        </div>

        