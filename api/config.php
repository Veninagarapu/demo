<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'react-crud';

// Create a MySQLi instance (connect to the database)
$con = new mysqli($host, $username, $password, $database);

if($con->error_connect){
    echo"coonection error".$con->error_connect;
}

echo "connected";