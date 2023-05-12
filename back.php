<?php
session_start();
if (str_contains($_SESSION['game_state']['room'], 'room2'))
    $_SESSION['game_state']['room'] = 'room1_1';
else 
    $_SESSION['game_state']['room'] = 'room2_3';
header('Location: main.php');
exit;
?>