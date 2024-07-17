<?php

include "connect.php";
 ?>
<!DOCTYPE html>
<html lang="en">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <head>
   
   <title>PARADISE ROYALE</title>
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

h1 {
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
    border: 1px solid black;
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
    text-align: center;
  
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>

<body>
   
<div class="container">

<form id="registrationpage" action="registartion.php" method="post">
   <h1>Manager Registration</h1>

      <input type="text" name="fname" class="input" placeholder="First Name" />
      <br>
      <input type="text" name="lname" class="input" placeholder="Last Name" required/>
      <br>
      <input type="text" name="email" class="input" placeholder="Email" required/>
      <br>
      <input type="password" name="password" class="input" placeholder="Password" required/>
      <br>
      <input type="password" name="cpassword" class="input" placeholder="Re-enter Password" required/>
      <br>
      <button type="submit" name="signup" class="Registrationbutton"  >Submit</button>

</form>
<br>
<a href="login.php">Back to Login</a>
  
</div>

</body>
</html>


   <?php

   if (isset($_POST['signup'])) {
      //echo '<script type="text/javascript"> alert("Register button click")</script>';

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];

      if ($password == $cpassword) {
         $query = "SELECT * FROM manager WHERE email = '$email' ";

         $query_run = mysqli_query ($con,$query);

         if (mysqli_num_rows($query_run)>0) {
            //all ready a user
            echo '<script type="text/javascript"> alert("User Exists !!")</script>';
         }
         else {
            $query1 = "INSERT INTO manager (First_name,Last_name,email,password)
                     VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".md5($_POST['password'])."')";
            $query2 =  "INSERT INTO login (email,password) VALUES ('".$_POST['email']."','".md5($_POST['password'])."')";

            $query_run = mysqli_query ($con,$query1) && mysqli_query ($con,$query2);
            if ($query_run) {
               echo '<script type="text/javascript"> alert("Member Add Successfully !!")</script>';
            }
            else {
               echo '<script type="text/javascript"> alert("!! Error !!")</script>';
            }


         }

      }
      else {
         echo '<script type="text/javascript"> alert("Please Enter Values !!")</script>';
      }
   }

mysqli_close($con);

    ?>
  
