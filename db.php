<?php

function db() {

    $servername = "localhost";
    $username = "root";
    $password = "password";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'qagenda-controle-clientes');
    
    // Check connection
    if (!$conn) 
      die("Connection failed: " . mysqli_connect_error());

    return $conn;
}