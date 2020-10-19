<body>
    <div class="container">

        <h2>Cadastro de Categoria</h2>

        <form method="POST" id="descricao">
            <div class="form-group row">
                <label for="inputdatobservacao" class="col-sm-2 col-form-label">Descrição da Categoria</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" cols="50" name="category" id="category" form="category" placeholder="Descrição da Categoria"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                    <a href="/category" class=" btn btn-outline-primary ">Voltar</a>
                </div>

            </div>
        </form>
    </div>