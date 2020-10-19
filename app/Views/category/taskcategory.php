<body>
    <div class="container">

        <h2>Lista de Categorias</h2>

        <a href="/new/category" class=" btn btn-outline-primary mb-2">Nova Categoria</a>

        <table id="listareu" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>ID Categoria</th>
                    <th>Descrição</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            <?php 
            foreach($category as $dat){
                ?>

                <tr>
                    <td><?php echo $dat['id']; ?></td>
                    <td><?php echo $dat['descricao']; ?></td>
                    <td></td>
                    <td></td>

                    <td><a href="#" class="btn btn-primary">Alterar</a></td>
                </tr>
                <?php 
            }
            ?>

            </tbody>

        </table>

        <div class="form-group row">
            <div class="col-sm-10">
                <a href="/" class=" btn btn-outline-primary ">Voltar</a>
            </div>
        </div>

        </nav>
    </div>