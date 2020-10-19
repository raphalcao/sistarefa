<body>
    <div class="container">

        <h2>Lista de Tarefas</h2>

        <table id="listareu" class="table table-striped table-bordered" style="width:100%">


            <a href="/new/assigment" class=" btn btn-outline-primary mb-2">Nova Tarefa</a>
            <a href="/category" class=" btn btn-outline-primary mb-2">Lista de Categorias</a>
            <a href="/accountable" class=" btn btn-outline-primary mb-2">Lista de Responsáveis</a>

            <thead>
                <tr>
                    <th>ID Tarefa</th>
                    <th>Responsável</th>
                    <th>Data Término</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            
            <?php 
            foreach($assigment as $dat){
                ?>
                <tr>
                    <td><?php echo $dat['id']; ?></td>
                    <td><?php echo $dat['descicao']; ?></td>
                    <td><?php echo $dat['id_responsavel']; ?></td>
                    <td><?php echo $dat['data_fim_tarefa']; ?></td>

                    <td><a href="#" class="btn btn-primary">Alterar</a></td>
                </tr>
                <?php 
            }
            ?>
            
            </tbody>

        </table>

        </nav>
    </div>
