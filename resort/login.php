<?php

include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MANAGER LOGIN</title>
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

#container{
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
<div id="container">
   <form id="form" action="login.php" method="post">
      <h1> Manager Login</h1>
            
         <input name="email" type="text" class="input"  placeholder="Email" required/>
         <br>
         <input name="password" type="password" class="input"  placeholder="Password" required/>
         <br>
         <button  name="login" type="submit" class="loginbutton" >SIGN IN</button>

   </form>
   <br><br>
<p>Are You a new User?<a href="registartion.php">Register</a></p>
<p>Are You a Customer?<a href="clogin.php">Customer Login</a></p>

  
</div>
</body>
</html>



   <?php

      if(isset($_POST['login'])){
         //echo '<script type="text/javascript"> alert("Logged in xD !!")</script>';
         $email=$_POST['email'];
         $password=$_POST['password'];

         $query = "SELECT * FROM login WHERE email = '$email' AND password = md5('$password')";

         $query_run = mysqli_query($con,$query);

         if (mysqli_num_rows ($query_run) > 0) {
            //vaild
            $_SESSION['email']=$email;
            header('location:managerview.php');
         }
         else {
            //Invaild
            echo '<script type="text/javascript"> alert("Invaild User")</script>';
         }


      }

mysqli_close($con);

    ?>


   
