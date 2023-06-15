<?php

require_once 'db.php';

$name = $_POST['name'];
$whatsapp = $_POST['whatsapp'];

$conn = db();

$query = "INSERT INTO customers (name, whatsapp) VALUES ('$name', '$whatsapp')";

$insert = $conn->query($query);

if ($insert === TRUE)
    $message = 'Registrado com sucesso!';
else
    $message = 'Erro ao registrar';

header("Location: index.php?message=$message");



