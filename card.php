<?php
    session_start();
    if(!in_array('card_code', $_SESSION['game_state']['objects']))
        array_push($_SESSION['game_state']['objects'],'card_code');
    if(!in_array('pic_key', $_SESSION['game_state']['objects'])) 
        $_SESSION['game_state']['room'] = 'room2_card';
    else 
        $_SESSION['game_state']['room'] = 'room2_1';
    
    header('Location: main.php');
    exit;
?>
