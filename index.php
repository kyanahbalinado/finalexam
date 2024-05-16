<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
} 

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order_Page</title>
    <style>
        body {
            background-color:black; 
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

        ul {
            border: 1px solid #008000;
            padding: 10px;
            background-color: #FFFBF5;
            text-align: center;
            list-style-position: inside;
        }

        p:not(:last-child) {
            margin-bottom: 10px;
        }

        h1, h2, h3 {
            color: #008000; 
        }

        label {
            color: black; 
        }

        select, input[type="text"] {
            border: 1px solid black; 
            background-color: #FFFBF5;
            color: black; 
            padding: 5px;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #008000; 
            color: #FFFBF5; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #008000; 
        }
    </style>
</head>
<body>
    <?php 
    $welcomeMessage = isset($_SESSION['username']) ? "Welcome " . $_SESSION['username'] . " to nean's canteen" : "Welcome to nean's canteen!";
    ?>

    <form action="receipt.php" method="GET">

        <h1><?php echo $welcomeMessage; ?></h1>
        <h2>MENU:</h2>
        <ul>
            <li>kare-kare - 150 PHP</li>
            <li>sinigang - 200 PHP</li>
            <li>adobo - 250 PHP</li>
            
        </ul>
        <p>
            <label for="order">please select your menu:</label>
            <select name="order" id="order">
                <option value="kare-kare">kare-kare</option>
                <option value="sinigang">sinigang</option>
                <option value="adobo">adobo</option>
            </select>
        </p>
        <p><label for="q">Quantity: </label><input type="text" name="q" id="q"></p>
        <p><label for="c">Cash: </label><input type="text" name="c" id="c"></p>

        <p>
            <input type="submit" value="Submit">
            <input type="submit" name="logout" value="Logout" formaction="login.php">
        </p>
    </form>
</body>
</html>
