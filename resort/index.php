<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
  
  <style>
  body {
  font-family: Roboto, sans-serif;
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url('img/resortimage.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.container {
  max-width: 500px;
  padding: 100px;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: rgba(255, 255, 255, 0.5); 
  backdrop-filter: blur(10px);
/*  
  background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%); */
  background-blend-mode: overlay;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
  margin-bottom: 20px;

  font-size: 36px;
  background: linear-gradient(-45deg, #333333, #666666, #333333);/* Gradient background */
  -webkit-background-clip: text; /* Apply gradient to text */
  background-clip: text; /* Apply gradient to text */
  color: transparent;
}

.button {
  display: block;
  width: 100%;
  padding: 15px;
  margin-bottom: 10px;
  border: none; /* Remove border */
  color: #fff; /* White text color */
  background-color: rgba(0, 0, 0, 0.3); /* Semi-transparent black background */
  border-radius: 4px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.button:hover {
  background-color: rgba(0, 0, 0, 0.5); /* Darker semi-transparent black background on hover */
}

    
  </style>
</head>
<body>
  <div class="container">
    <h2>Welcome to <br> PARADISE ROYALE </h2>
    <a href="clogin.php" class="button">
      Customer Login
    </a>
    <a href="login.php" class="button">
      Manager Login
    </a>
  </div>
</body>
</html>
