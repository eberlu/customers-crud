<?php include 'partials/header.php'; ?>

<div class="container my-5 d-flex flex-column gap-4">

    <h1>Novo cliente</h1>

    <form method="POST" action="store.php">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>

</div>

<?php include 'partials/footer.php'; ?>