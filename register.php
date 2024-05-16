<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; 
            padding: 0; 
        }

        form {
            width: 360px;
            padding: 20px;
            border: 2px solid #008000; 
            border-radius: 10px;
            background-color: #FFFBF5;
            margin: 20px; 
        }

        input[type="text"], input[type="password"], input[type="submit"] {
            width: 97%;
            padding: 7px;
            margin: 5px 0;
            border: 1px solid #008000; 
            background-color: #FFFBF5;
            color: #008000; 
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #008000; 
            color: #FFFBF5; 
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #008000; 
        }

        a {
            color: #008000;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        .register-heading {
            color: #008000;
        }
    </style>
</head>
<body>
<form action="handleForm.php" method="POST">
    <h1 class="register-heading">Please Register Here</h1>
    <div class="fields">
        <p><input type="text" placeholder="Username" name="username"></p>
        <p><input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Register" name="regBtn"></p>
        <p><a href="login.php">Return to Login Page</a></p>
    </div>
</form>
</body>
</html>
