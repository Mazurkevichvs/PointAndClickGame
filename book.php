<?php
    session_start();
    if(!in_array('book_code', $_SESSION['game_state']['objects']))
        array_push($_SESSION['game_state']['objects'],'book_code');
    header('Location: main.php');
    exit;
?>