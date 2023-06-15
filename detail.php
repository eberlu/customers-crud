<?php

    require_once 'db.php';

    include 'partials/header.php';

    $id = $_GET['id'];

    $conn = db();

    $customer = $conn
        ->query("SELECT * FROM customers WHERE id = '$id' LIMIT 1")
        ->fetch_object();

    $conn->close();
?>

<div class="container my-5 d-flex flex-column gap-4">

    <h1><?= $customer->name ?></h1>

</div>

<?php include 'partials/footer.php'; ?>