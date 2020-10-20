<body>
    <div class="container">

        <h2><?php echo $titulo ?></h2>
        <strong> <?php echo $msg ?></strong>

        <form method="POST" id="descricao" >
            <div class="form-group row">
                <label for="inputdatobservacao" class="col-sm-2 col-form-label">Descrição da Categoria</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" name="descricao" placeholder="Descrição da Categoria">
                        <?php echo isset($categoria) ? $categoria['id'] : ''?>
                    </textarea>
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