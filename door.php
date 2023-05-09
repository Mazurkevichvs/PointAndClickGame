<?php
session_start();
if ($_SESSION['game_state']['room'] === 'room2')
    $_SESSION['game_state']['room'] = 'room1';
else
    $_SESSION['game_state']['room'] = 'room2';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="refresh" content="0; URL=main.php">
</head>

<body>
</body>

</html>