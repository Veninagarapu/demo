<?php

include("config.php");
include("controller/UserController.php");

$request_method = $_SERVER["REQUEST_METHOD"]; // Use square brackets for array access

$url = explode("/", trim($_SERVER["PATH_INFO"], "/"));

switch ($request_method) {
    case 'GET': // Corrected the case statement syntax
        if ($url[0] === 'user' && isset($url[1])) { // Use === for comparison and corrected issset to isset
            getUserById($url[1]); // Ensure function name matches the one defined earlier
        } else {
            getAllUsers(); // Uncomment this if you have the function defined
        }
        break; // Always break after a case to prevent fall-through

    case "POST":
        if($ur[0]=== 'user'){
            createUser();
        }
        break;
    default:
        // Handle other request methods if necessary
        break;
}