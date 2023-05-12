<?php
    session_start();
        $_SESSION['game_state']['tv'] = true;
        $_SESSION['game_state']['room'] = 'room2_3';
    header('Location: main.php');
    exit;
?>