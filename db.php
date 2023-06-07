<?php

function db() {

    $servername = "database";
    $username = "root";
    $password = "password";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'qagenda_controle_clientes');
    
    // Check connection
    if (!$conn) 
      die("Connection failed: " . mysqli_connect_error());

    return $conn;
}