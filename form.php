<!-- <form method="POST" action= "formdetails.php">
<label for="name">name</label>
<input type="text" id="name" name="name">
<input type="submit" name="submit" value="submit">
</form> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Load jQuery -->
</head>
<body>
    <form id="ajaxForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

    <div id="response"></div> <!-- To display the server response -->

    <script>
        $(document).ready(function() {
            $('#ajaxForm').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting the traditional way

                $.ajax({
                    url: 'formdetails.php',     // The server-side script
                    type: 'POST',               // Form method
                    data: $(this).serialize(),  // Serialize form data
                    success: function(response) {
                        // Show the response from formdetails.php in the #response div
                        $('#response').html(response);
                    },
                    error: function() {
                        // In case of any error during the request
                        $('#response').html('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
</html>









