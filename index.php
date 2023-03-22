<!DOCTYPE html>
<html lang="en">
<head style="font-family:fantasy;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
      text-align:center;
      color:greenyellow;
      }
    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
    }
    body {
  background:url('What.jpg') ;
  position: relative;
  background-position: center;
  background-position-x: 100%;
  background-position-y: 100%;
  overflow: hidden;
}

    
    form {
      background-color: transparent;
      width: 400px;
      margin: 0 auto;
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 3px 3px #ccc;
      position: relative;
      perspective: 1000px;
      overflow: hidden;
    }

    form:hover {
      animation: rotate 2s ease-in-out forwards;
    }

    p {
      margin: 0;
      padding: 0;
      color:greenyellow;
    }

    input[type="text"], input[type="email"], input[type="number"], input[type="password"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px whitesmoke;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    a {
      color: #4CAF50;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body style="font-family:fantasy;">
   <em> <form action="register.php" method="GET">
    <em><h1>Register Form</h1></em>
        <p>User Name :</p> <input type="text" name="uname" required> <br>
        <p>Email :</p> <input type="text" name="email" required> <br>
        <p>Phone number :</p> <input type="number" name="phnumber" required> <br>
        <p>Password :</p> <input type="password" name="password" required> <br> <br>
        <input type="submit" name="submit" value="Register">
        <p>Already have an account? <a href="login.php">LOGIN</a></p>
    </form></em>
</body>
</html>