<body>
    <div class="container">

        <h2>Lista de Responsáveis</h2>
        <a href="/new/accountable" class=" btn btn-outline-primary mb-2">Novo Responsável</a>

        <table id="listareu" class="table table-striped table-bordered" style="width:100%">

            <thead>
                <tr>
                    <th>ID Responsável</th>
                    <th>Nome</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach($accountable as $dat){
                ?>

                <tr>
                    <td><?php echo $dat['id']; ?></td>
                    <td><?php echo $dat['nome']; ?></td>
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