<?php
    session_start();
    if(!in_array('box_key', $_SESSION['game_state']['objects']) && !in_array('box_code', $_SESSION['game_state']['objects'])) {
        array_push($_SESSION['game_state']['objects'],'box_key');
        array_push($_SESSION['game_state']['objects'],'box_code');
        $_SESSION['game_state']['room'] = 'room1_1';
    }
    header('Location: main.php');
    exit;
?>
