<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Page</title>
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
        .receipt {
            width: 300px;
            padding: 20px;
            border: 2px solid #008000;
            border-radius: 10px;
            background-color: #FFFBF5;
            text-align: center;
        }
        h1, h2, h3 {
            color: #008000; 
        }
        p {
            color: black; 
        }
    </style>
</head>
<body>
    <div class="receipt">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['order'], $_GET['q'], $_GET['c'])) {
            $order = $_GET["order"];
            $quantity = $_GET["q"];
            $cash = $_GET["c"];
            
            $prices = [
                "kare-kare" => 150,
                "sinigang" => 200,
                "adobo" => 250,
            ];

            if (is_numeric($quantity) && is_numeric($cash)) {
                $totalCost = $prices[$order] * $quantity;
                
                if ($cash >= $totalCost) {
                    $change = $cash - $totalCost;
                    $username = $_SESSION['username'] ?? '';
                    echo "<h1>Thank you" . ($username ? " $username" : "") . " for ordering!</h1>";
                    echo "<h2>Your Receipt:</h2>";
                    echo "<p>Total cost: $totalCost</p>";
                    echo "<p>Cash: $cash</p>";
                    echo "<p>Change: $change</p>";
                } else {
                    echo "<p>Error: Insufficient cash.</p>";
                }
            } else {
                echo "<p>Error: Quantity and cash must be numeric.</p>";
            }
        }
        ?>
    </div>
</body>
</html>