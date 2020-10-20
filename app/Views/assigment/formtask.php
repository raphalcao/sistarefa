<body>
    <div class="container">

        <h2>Cadastro de Tarefas</h2>

        <form method="POST" id="descricao">
            <div class="form-group row">
                <label for="inputdatdescricao" class="col-sm-2 col-form-label">Descrição</label>
                <div class="col-sm-10">
                    <textarea rows="4" class="form-control" cols="50" name="descricao" id="descricao" form="createcliente" placeholder="Observação"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="reu_id" class="col-sm-2 col-form-label">Nome do Responsável</label>
                <div class="col-sm-10">
                    <select id="responsavel" name="responsavel" class="form-control">
                        <?php
                        foreach ($accountable as $dat) {
                        ?>
                            <option value="<?php echo $dat['id']; ?>"><?php echo $dat['nome']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputdatafinalizacao" class="col-sm-2 col-form-label">Data de Término</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="data_termino" id="data_termino" placeholder="Data de Término" required="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="reu_id" class="col-sm-2 col-form-label">Categoria</label>
                <div class="col-sm-10">
                    <select id="categoria" name="categoria" class="form-control">
                        <?php
                        foreach ($category as $dat) {
                        ?>
                            <option value="<?php echo $dat['id']; ?>"><?php echo $dat['descricao']; ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                    <a href="/" class=" btn btn-outline-primary ">Voltar</a>
                </div>

            </div>

        </form>
    </div>