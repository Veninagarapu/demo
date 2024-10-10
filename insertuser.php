<!DOCTYPE html>
<html>
<head>
    <title>PHP Form with Name, Email, and Age</title>
</head>
<body>

<h2>User Information Form</h2>

<!-- The form will submit data to the same script using POST -->
<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php
// Include database connection (assume 'db.php' contains $con = new mysqli(...) )
include('db.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve and sanitize form inputs
    $uname = htmlspecialchars($_POST['name']);
    $uemail = htmlspecialchars($_POST['email']);
    $uage = (int)$_POST['age'];  // Cast to integer

    // Display the submitted data
    echo "<h3>Submitted Information</h3>";
    echo "Name: " . $uname . "<br>";
    echo "Email: " . $uemail . "<br>";
    echo "Age: " . $uage . "<br>";

    // Prepare the SQL query (id will auto-increment, so don't include it)
    $query = "INSERT INTO user (name, email, age) VALUES (?, ?, ?)";

    // Prepare the statement
    $ps = $con->prepare($query);

    if ($ps === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters (s for string, i for integer)
    $ps->bind_param("ssi", $uname, $uemail, $uage);

    // Execute the query
    if ($ps->execute()) {
        echo "Inserted data successfully!<br>";
    } else {
        echo "Error inserting data: " . $ps->error;
    }

  
}

// Close the database connection
$con->close();
?>
