<?php
    session_start();
    if(!in_array('card_code', $_SESSION['game_state']['objects']))
        array_push($_SESSION['game_state']['objects'],'card_code');
    header('Location: main.php');
    exit;
?>
