<?php
// Process form data on submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate form data (you can add more validation as needed)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    // Process the data further (you can save it to a database, send an email, etc.)
    
}
?>

<!-- HTML form -->
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <input type="submit" value="Submit">
</form>
