<?php

function db() {

    $DB_HOST = getenv('DB_HOST', true);
    $DB_NAME = getenv('DB_NAME', true);
    $DB_USER = getenv('DB_USER', true);
    $DB_PASSWORD  = getenv('DB_PASSWORD', true);
    
    // Create connection
    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    
    // Check connection
    if (!$conn) 
      die("Connection failed: " . mysqli_connect_error());

    return $conn;
}