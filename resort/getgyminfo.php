<?php

// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "resort"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $gymId = $_GET['id'];
    
   
    $sql_select_gym = "SELECT * FROM gym WHERE id = $gymId";
    
   
    $result = $conn->query($sql_select_gym);
    
    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
        
        
        echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
        echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>Opening Hours:</strong> " . nl2br($row["opening_hours"]) . "</p>";
        echo "<p><strong>Trainer:</strong> " . $row["gym_trainner"] . "</p>";
    } else {
        echo "No gym information found for the provided ID.";
    }
} else {
    echo "No gym ID provided.";
}

// Close database connection
$conn->close();

?>