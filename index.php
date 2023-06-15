<?php 

    require_once 'db.php';

	require_once 'formatDate.php';

    include 'partials/header.php';

    $customers = db()->query("SELECT * FROM customers WHERE created_at ORDER BY created_at");
    
?>
    
    <div class="container my-5 d-flex flex-column gap-4">

        <h1>Cadastro de clientes</h1>

        <div class="d-flex gap-5 items-center">
            <a class="btn btn-outline-primary" href="create.php">Novo cliente</a>
        </div>

        <table class="table table-striped table-hover">

            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Data de criação</th>
                    <th scope="col">Data de atualização</th>
                    <th scope="col" style="width: 100px">#</th>
                </tr>

            </thead>

        <tbody>
            
            <?php 
            
                foreach($customers as $customer):
                
                $customer = (object) $customer;
                
            ?>

                <tr>

                    <td><?= $customer->id ?></td>
                    <td><?= $customer->name ?></td>
                    <td><?= $customer->whatsapp ?></td>
                    <td><?= formatDate($customer->created_at) ?></td>
                    <td><?= formatDate($customer->updated_at) ?></td>
                    <td>
                        <?= "<a class='btn btn-primary' href='detail.php?id={$customer->id}'>Detalhes</a>" ?>
                    </td>

                </tr>

            <?php endforeach ?>

        </tbody>

    </table>   

    </div>

<?php include 'partials/footer.php' ?>
