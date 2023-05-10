<?php
require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body{
        background: linear-gradient(#7d2ae8, #9198e5);
    }
    h2{
        display: inline-block;
        border: 1px solid #7d2ae8;
        padding: 10px;
        background-color:aliceblue;
        color: black;
        text-align: center;
        align-items: center;
        text-decoration: none;
        border-radius: 6px;
    }

    a{
        text-align: center;
    }
    
</style>

<body>
    <br>
    <a href="insert.php"><h2>Insert Records</h2></a><br>
    <a href="display.php"><h2>Display Records</h2></a><br>
    <a href="queries.php"><h2>Statistics</h2></a><br>
    <a href="up.php"><h2>Update</h2></a><br>
    <a href="joins.php"><h2>Views</h2></a><br>
    <a href="https://www.irtsa.net/pdfdocs/List-of-Emergency-Helpline-Numbers-All-Over-in-India.pdf"><h2>Emergency Helpline Numbers</h2></a>
</body>
</html>
