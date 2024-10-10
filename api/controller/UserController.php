<?php
include("config.php");

function getUserById($id) {
    global $con; // Make sure to use the global connection variable

    $query = "SELECT * FROM user WHERE id = ?";
    $ps = $con->prepare($query);
    
    // Bind the parameter (the type is 'i' for integer, adjust if necessary)
    $ps->bind_param("i", $id);
    
    // Execute the statement
    $ps->execute();
    
    // Get the result
    $result = $ps->get_result();
    
    $array = [];
    while ($row = $result->fetch_assoc()) { // Use fetch_assoc for associative array
        $array[] = $row; // Append the row to the array
    }
    
    echo json_encode($array); // Encode the entire array
}


function createUser(){
    $query = "insert into user(name,email,age) values(?,?, ?)";

    $input = file_get_contents("php://input");
    $ps = $con->prepare($query);
    $ps->bind_param("ssi", $input['$name'],  $input['$email'], $input['$age'] );
    $ps->execute();
    
}


