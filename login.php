<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { 
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 360px;
            padding: 20px;
            border: 2px solid #008000;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .login-container h1 {
            color: #008000;
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"], 
        .login-container input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #008000;
            border-radius: 5px;
            box-sizing: border-box;
            color: #008000;
        }
        .login-container input[type="submit"] {
            background-color: #008000;
            color: white;
            border: none;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #006400;
        }
        .login-container a {
            color: #008000;
            text-decoration: none;
            text-align: center;
            display: block;
            margin-top: 20px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="handleForm.php" method="POST">
            <h1>Please Login Here</h1>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Login" name="loginBtn">
            <a href="register.php"><b>Register</b></a>
        </form>
    </div>
</body>
</html>

