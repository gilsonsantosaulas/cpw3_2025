
        <div class="card mt-5">
            <div class="card-header">
                <h5 >Login</h5>
            </div>
            <div class="card-body">
                <form method="post" action="AutController.php?acao=login">
                    <input type="hidden" name="id" value="<?= $produto->id ?>" >
                    <label class="form-label">Usuário:</label>
                    <input class="form-control" type="text" 
                                                name="usuario"
                                                required autofocus>
                    <label>Senha:</label>
                    <input class="form-control" type="password" 
                                                name="senha" 
                                                required>
                    <button class="btn btn-primary mt-3" type="submit">Login</button>
                </form> 
            </div>
        </div>

        