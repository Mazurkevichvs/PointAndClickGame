<?php
    session_start();
    if(!in_array('remote', $_SESSION['game_state']['objects']))
        array_push($_SESSION['game_state']['objects'],'remote');
    header('Location: main.php');
    exit;
?>