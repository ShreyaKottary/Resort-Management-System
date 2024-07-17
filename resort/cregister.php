<?php

include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>body {
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
        <h2>Register</h2>
        <form action="cregister.php" method="post">
            <label for="email">User Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="register">Register</button>
        </form>
        <p>Already have an account? <a href="clogin.php">Login here</a></p>
    </div>
</body>
</html>

<?php

if (isset($_POST['register'])) {
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "resort";

    
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_query = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
       
        echo "<script>alert('User with this email is already registered. Please use a different email.');</script>";
    } else {
       
        $insert_query = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

        if ($conn->query($insert_query) === TRUE) {
          
            echo "<script>alert('Registration successful. You can now login.');</script>";
            header("Location: clogin.php");
            exit();
        } else {
           
            echo "<script>alert('Error in registration: " . $conn->error . "');</script>";
        }
    }

    $conn->close();
}
?>
