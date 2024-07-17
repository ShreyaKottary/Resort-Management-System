<?php

include "connect.php";
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    background-image: url('img/resortimage.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.5); 
  backdrop-filter: blur(10px);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    background: linear-gradient(-45deg, #333333, #666666, #333333);/* Gradient background */
  -webkit-background-clip: text; /* Apply gradient to text */
  background-clip: text; /* Apply gradient to text */
  color: transparent;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    color-black;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
    margin-top: 10px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Customer Login</h2>
        <form action="clogin.php" method="post">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="cregister.php">Register here</a></p>
        <p>Are You a Manager?  <a href="login.php">Login here</a></p>
    </div>
</body>
</html>

<?php
// Check if form is submitted
if (isset($_POST['login'])) {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "resort";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if user exists
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to dashboard or another page
        header("Location: chome.php");
        exit();
    } else {
        // User not found, display error message
        echo "<script>alert('Invalid username or password');</script>";
    }

    $conn->close();
}
?>
