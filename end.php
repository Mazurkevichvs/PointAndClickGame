<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EscapeRoom</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #fff;
            font-size: 50px;
            margin-bottom: 20px;
        }
        a {
            font-size: 36px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="end_title">Congratualtions, you have managed to escape!</h1>
        <a href="main.php">Click here to return to home page.</a>
    </div>
</body>

</html>