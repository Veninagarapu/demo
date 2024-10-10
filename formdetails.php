<?php
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']); // Sanitize the user input
    echo "$name : name";                      // Return a response to the AJAX request
} else {
    echo "No name provided.";
}
?>

