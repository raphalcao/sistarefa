<body>
    <div class="container">

        <h2>Editar Categoria</h2>

        <form method="POST" id="descricao" >
            <div class="form-group row">
                <label for="inputdatobservacao" class="col-sm-2 col-form-label">Descrição da Categoria</label>
                <div class="col-sm-10">
                <td><textarea name="category" rows="4" cols="16"><?php echo $descricao['id']; ?></textarea> </td>
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