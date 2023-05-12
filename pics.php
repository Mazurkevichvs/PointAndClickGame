<?php
    session_start();
    if(!in_array('pic_key', $_SESSION['game_state']['objects'])) {
        array_push($_SESSION['game_state']['objects'],'pic_key');
    }  
    if(!in_array('card_code', $_SESSION['game_state']['objects'])) 
        $_SESSION['game_state']['room'] = 'room2_pic';
    else 
        $_SESSION['game_state']['room'] = 'room2_1';
    header('Location: main.php');
    exit;
?>
