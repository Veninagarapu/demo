<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'react-crud';

// Create a MySQLi instance (connect to the database)
$con = new mysqli($host, $username, $password, $database);

// Check for connection error
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

echo "Connection successful!";




