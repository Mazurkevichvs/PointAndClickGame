<?php
session_start();
if ($_SESSION['game_state']['room'] === 'room2')
    $_SESSION['game_state']['room'] = 'room1';
else 
    $_SESSION['game_state']['room'] = 'room2';
header('Location: main.php');
exit;
?>