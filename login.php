
<!DOCTYPE html>
<html lang="en">
<head style="font-family:fantasy;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h1{
        text-align: center;
        color:greenyellow;
      }
        body {
    background:url('cyber.jpg');
    font-family: Arial, sans-serif;
    height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
}
body {
  background-color: #000;
  overflow: hidden;
}

body:before,
body:after {
  content: '';
  position: absolute;
  top: -150px;
  left: -150px;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  animation: particle 3s ease-in-out infinite;
}

form {
    background-color: transparent;
    width: 400px;
    margin: 0 auto;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 3px 3px #ccc;
    overflow: hidden;
}

p {
    margin: 0;
    padding: 0;
    color:greenyellow;
}

input[type="text"], input[type="password"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
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
    color:#4CAF50;
}

a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body style="font-family:fantasy;">
    <em><form action="login2.php" method="GET">
      <h1>Login Form</h1>
        <p>Username :</p> <input type="text" name="uname" > <br>
        <p>Password :</p> <input type="password" name="password" > <br><br>
        <input type="submit" name="submit" value="Login"> <br><br>
        <p>Don't you have an account? <a href="index.php">REGISTER</a></p>
    </form></em>

    

</body>
</html>