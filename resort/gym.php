<?php

// Database connection parameters
$servername = "localhost"; // Change this to your MySQL server hostname
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "resort"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the 'gym' table
$sql_select_data = "SELECT * FROM gym";

// Execute SELECT query
$result = $conn->query($sql_select_data);

?>
<?php
include "include/header.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/gymnasium.jpg');
            margin: 0;
            padding: 0;
            height:100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 70px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.5); 
  backdrop-filter: blur(10px);
        }

        h2 {
            margin-top: 0;
            color: black;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #666;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
            color: #333;
        }

        select option {
            background-color: #fff;
            color: #333;
        }

        .output {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }

        .output p {
            margin: 0;
            font-size: 20px;
            color: black;
            background-image: linear-gradient(45deg, #000000, #333333);

            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Gym Information</h2>

    <div>
        <label for="gym">Select Gym:</label>
        <select id="gym">
            <option value="">Select Gym</option>
            <?php
            // Check if there are rows returned from the query
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                }
            } else {
                echo "<option value=''>No gym information found</option>";
            }
            ?>
        </select>
    </div>

    <div class="output" id="gymInfo">
        <!-- Gym information will be displayed here -->
    </div>
</div>
<script>
    document.getElementById('gym').addEventListener('change', function() {
        var gymId = this.value;
        if (gymId !== '') {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("gymInfo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getgyminfo.php?id=" + gymId, true);
            xhttp.send();
        } else {
            document.getElementById("gymInfo").innerHTML = "";
        }
    });
</script>
</body>
</html>

<?php

// Close connection
$conn->close();

?>